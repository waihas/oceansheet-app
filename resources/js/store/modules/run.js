import Swal from 'sweetalert2'
import axios from 'axios'

// actions
export const actions = {
    async updateConnection(context, {token}) {
        // console.log('update for: ' + token)

        let count_outputs = 1
        let source_spreadsheetId = ''
        let source_title = ''
        let source_from = ''
        let source_to = ''
        let output_1_spreadsheetId = ''
        let output_1_title = ''
        let output_1_from = ''
        let output_2_spreadsheetId = ''
        let output_2_title = ''
        let output_2_from = ''
        let output_3_spreadsheetId = ''
        let output_3_title = ''
        let output_3_from = ''

        //1. get connection data
        await axios.get('/api/connection/'+token+'/get')
            .then(res => {
                count_outputs = res.data.data.count_outputs
                source_spreadsheetId = res.data.data.source_spreadsheetId
                source_title = res.data.data.source_title
                source_from = res.data.data.source_from
                source_to = res.data.data.source_to
                output_1_spreadsheetId = res.data.data.output_1_spreadsheetId
                output_1_title = res.data.data.output_1_title
                output_1_from = res.data.data.output_1_from
                output_2_spreadsheetId = res.data.data.output_2_spreadsheetId
                output_2_title = res.data.data.output_2_title
                output_2_from = res.data.data.output_2_from
                output_3_spreadsheetId = res.data.data.output_3_spreadsheetId
                output_3_title = res.data.data.output_3_title
                output_3_from = res.data.data.output_3_from
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

        //2. get data from source sheet (update from the selected cells to the end where there is no more text)
        const sourceData = await this._vm.$google.api.client.sheets.spreadsheets.values.get({
            spreadsheetId: source_spreadsheetId,
            range: source_title+'!'+source_from+':'+source_to,
        });

        if(sourceData.status !== 200) {
            await axios.post('/api/calls/error/save', {
                error: sourceData.data.status,
                log: sourceData.data.data,
            })
            
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'something went wrong with source sheet!',
                confirmButtonColor: "#10b981",
            }).then(() => {
                this.$router.push({ name: 'dashboard.connections' })
            })
        }

        //3. put data on output sheets (override maybe the previous putted one)
        const response1 = await this._vm.$google.api.client.sheets.spreadsheets.values.update({
            spreadsheetId: output_1_spreadsheetId,
            range: output_1_title+'!'+output_1_from,
            valueInputOption: 'USER_ENTERED',
            values: sourceData.result.values
        })

        if(response1.status !== 200) {
            await axios.post('/api/calls/error/save', {
                error: response1.data.status,
                log: response1.data.data,
            })

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'something went wrong with output sheet!',
                confirmButtonColor: "#10b981",
            }).then(() => {
                this.$router.push({ name: 'dashboard.connections' })
            })
        }

        if(count_outputs > 1) {
            const response2 = await this._vm.$google.api.client.sheets.spreadsheets.values.update({
                spreadsheetId: output_2_spreadsheetId,
                range: output_2_title+'!'+output_2_from,
                valueInputOption: 'USER_ENTERED',
                values: sourceData.result.values
            })

            if(response2.status !== 200) {
                await axios.post('/api/calls/error/save', {
                    error: response2.data.status,
                    log: response2.data.data,
                })

                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'something went wrong with output sheet!',
                    confirmButtonColor: "#10b981",
                }).then(() => {
                    this.$router.push({ name: 'dashboard.connections' })
                })
            }
        }

        if(count_outputs === 3) {
            const response3 = await this._vm.$google.api.client.sheets.spreadsheets.values.update({
                spreadsheetId: output_3_spreadsheetId,
                range: output_3_title+'!'+output_3_from,
                valueInputOption: 'USER_ENTERED',
                values: sourceData.result.values
            })

            if(response3.status !== 200) {
                await axios.post('/api/calls/error/save', {
                    error: response3.data.status,
                    log: response3.data.data,
                })

                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'something went wrong with output sheet!',
                    confirmButtonColor: "#10b981",
                }).then(() => {
                    this.$router.push({ name: 'dashboard.connections' })
                })
            }
        }

        //4. decrement number of updates in database
        await axios.post('/api/connection/'+token+'/run')
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
    },
}
