import axios from 'axios'
import Swal from 'sweetalert2'

async function runConnection(token) {
    console.log("connection is running")
    console.log(token)
    console.log("connection is runned")

    let source_spreadsheetId = ''
    let source_title = ''
    let source_from = ''
    let source_to = ''
    let output_spreadsheetId = ''
    let output_title = ''
    let output_from = ''

    // first get data by token
    await axios.get('/api/connection/'+token+'/get')
    .then(res => {
        source_spreadsheetId = res.data.data.source_spreadsheetId
        source_title = res.data.data.source_title
        source_from = res.data.data.source_from
        source_to = res.data.data.source_to
        output_spreadsheetId = res.data.data.output_spreadsheetId
        output_title = res.data.data.output_title
        output_from = res.data.data.output_from
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
        spreadsheetId: source_spreadsheetId,
        range: source_title+'!'+source_from+':'+source_to,
    });

    if(sourceData.status !== 200) {
        // put it in database
        await axios.post('/api/connection/save/error', {
            token: token,
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
        spreadsheetId: output_spreadsheetId,
        range: output_title+'!'+output_from,
        valueInputOption: 'USER_ENTERED',
        values: sourceData.result.values
    })

    if(response.status !== 200) {
        // put it in database
        await axios.post('/api/connection/save/error', {
            token: token,
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
}

export { runConnection }