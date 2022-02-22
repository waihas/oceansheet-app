<template>
     <button type="button" 
        @click="runConnection()"
        >
        <svg xmlns="http://www.w3.org/2000/svg"
            v-if="running"
            class="animate-spin flex-shrink-0 h-5 w-5 -ml-1 mr-2" fill="currentColor"
            viewBox="0 0 24 24">
            <path d="M13,3.233L13,3.233c0,0.454,0.302,0.867,0.745,0.966c3.711,0.829,6.46,4.238,6.243,8.242 c-0.221,4.086-3.662,7.437-7.752,7.555C7.718,20.127,4,16.49,4,12c0-3.807,2.675-6.996,6.243-7.798C10.69,4.101,11,3.693,11,3.235 V3.234c0-0.64-0.595-1.126-1.219-0.985C5.151,3.302,1.732,7.576,2.017,12.58c0.289,5.093,4.568,9.256,9.666,9.415 C17.341,22.171,22,17.619,22,12c0-4.753-3.334-8.741-7.785-9.752C13.593,2.107,13,2.595,13,3.233z"></path>
        </svg>
        <svg v-else xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-4 w-4 -ml-1 mr-2 fill-current" viewBox="0 0 24 24">
            <path d="M14 12h-4v-12h4v12zm6.949-4.493l1.81-.857c-.353-.7-.758-1.368-1.236-1.981l-1.512 1.318c.36.474.667.986.938 1.52zm-.797-4.299c-.589-.54-1.214-1.038-1.9-1.454l-1.216 1.599c.577.334 1.104.739 1.602 1.177l1.514-1.322zm1.827 7.792h2.006c-.072-.861-.229-1.694-.473-2.493l-1.82.862c.144.527.23 1.074.287 1.631zm-1.895 6.919l1.539 1.29c.465-.616.871-1.276 1.211-1.976l-1.846-.787c-.259.519-.562 1.011-.904 1.473zm1.912-4.919c-.054.54-.162 1.063-.299 1.574l1.864.795c.224-.762.372-1.553.439-2.369h-2.004zm-3.258 6.403c-1.779 1.608-4.129 2.597-6.713 2.597-5.525 0-10.021-4.486-10.021-10 0-1.913.554-3.691 1.496-5.207l2.162 2.162 1.353-7.014-7.015 1.351 2.045 2.045c-1.287 1.904-2.045 4.191-2.045 6.663 0 6.627 5.385 12 12.025 12 3.204 0 6.107-1.259 8.264-3.297l-1.551-1.3z"/>
        </svg>
        Run
    </button>
</template>

<script>
import Swal from 'sweetalert2'
import axios from 'axios'

export default {
    name: 'RunConnection',

    props: {
        token: '',
    },

    data() {
        return {
            running: false,
            source_spreadsheetId: '',
            source_title: '',
            source_from: '',
            source_to: '',
            output_spreadsheetId: '',
            output_title: '',
            output_from: '',
        }
    },

    methods: {
        async runConnection() {
            this.running = true;

            await this.updateCell();
            await this.decrementUserUpdates();

            this.running = false;
        },
        async updateCell() {

            // first get data by token
            await axios.get('/api/connection/'+this.token+'/get')
            .then(res => {
                this.source_spreadsheetId = res.data.data.source_spreadsheetId
                this.source_title = res.data.data.source_title
                this.source_from = res.data.data.source_from
                this.source_to = res.data.data.source_to
                this.output_spreadsheetId = res.data.data.output_spreadsheetId
                this.output_title = res.data.data.output_title
                this.output_from = res.data.data.output_from
            })
            .catch(e => {
                console.error(e)
                return Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'something went wrong while connecting!',
                    confirmButtonColor: "#10b981",
                })
            })

            // then run the API calls
            const sourceData = await this.$google.api.client.sheets.spreadsheets.values.get({
                spreadsheetId: this.source_spreadsheetId,
                range: this.source_title+'!'+this.source_from+':'+this.source_to,
            });

            if(sourceData.status !== 200) {
                // put it in database
                await axios.post('/api/connection/save/error', {
                    token: this.token,
                    error: sourceData.status,
                    log: sourceData.data,
                })
                .then(res => {
                })
                .catch(e => {
                    console.error(e)
                })
                
                // show alert
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'something went wrong with source sheet!',
                    confirmButtonColor: "#10b981",
                })
            }

            const response = await this.$google.api.client.sheets.spreadsheets.values.update({
                spreadsheetId: this.output_spreadsheetId,
                range: this.output_title+'!'+this.output_from,
                valueInputOption: 'USER_ENTERED',
                values: sourceData.result.values
            })

            if(response.status !== 200) {
                // put it in database
                await axios.post('/api/connection/save/error', {
                    token: this.token,
                    error: response.status,
                    log: response.data,
                })
                .then(res => {
                })
                .catch(e => {
                    console.error(e)
                })

                // show alert
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'something went wrong with output sheet!',
                    confirmButtonColor: "#10b981",
                })
            }
        },
        async decrementUserUpdates() {
            await axios.post('/api/connection/'+this.token+'/run')
            .then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'You connection did run successfully!',
                    confirmButtonColor: "#10b981",
                    timer: 1500
                })
            })
            .catch(e => {
                console.error(e)
            })
        }
    }
}
</script>