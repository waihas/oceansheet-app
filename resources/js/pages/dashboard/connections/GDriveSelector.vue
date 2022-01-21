<template>
    <div class="container">
        <div class="file-selector">
        <figure>
            <!-- <UploadIcon/> -->
        </figure>Select Files from Google Drive
        <p>
            <span>Authenticate with Google Drive</span>
        </p>
        <button type="button" @click="driveIconClicked();">Connect to Google Drive</button>
        </div>
        <!-- <AttachmentList :tempAttachments="getTempAttachments"/> -->
    </div>
</template>

<script>
export default {
    name: "Attachment",
    data() {
        return {
            pickerApiLoaded: false,
            developerKey: "AIzaSyDnUBzVRUIu2DFA9NE28Fbqru7Q5dei4Pw",
            clientId: "727914357338-l3hhcebf48cfesv4r2733vpjia40l8ft.apps.googleusercontent.com",
            scope: "https://www.googleapis.com/auth/drive.readonly",
            oauthToken: null
        }
    },

    mounted() {
        let gDrive = document.createElement("script");
        gDrive.setAttribute("type", "text/javascript");
        gDrive.setAttribute("src", "https://apis.google.com/js/api.js");
        document.head.appendChild(gDrive);
    },

    methods: {
        async driveIconClicked() {
            console.log("Clicked");
            await gapi.load("auth2", () => {
                console.log("Auth2 Loaded");
                gapi.auth2.authorize(
                {
                    client_id: this.clientId,
                    scope: this.scope,
                    immediate: false
                },
                this.handleAuthResult
                );
            });
            gapi.load("picker", () => {
                console.log("Picker Loaded");
                this.pickerApiLoaded = true;
                this.createPicker();
            });
        },

        handleAuthResult(authResult) {
            console.log("Handle Auth result", authResult);
            if (authResult && !authResult.error) {
                this.oauthToken = authResult.access_token;
                this.createPicker();
            }
        },

        createPicker() {
            console.log("Create Picker", google.picker);
            if (this.pickerApiLoaded && this.oauthToken) {
                var picker = new google.picker.PickerBuilder()
                .enableFeature(google.picker.Feature.MULTISELECT_ENABLED)
                .addView(google.picker.ViewId.DOCS)
                .setOAuthToken(this.oauthToken)
                .setDeveloperKey("AIzaSyDnUBzVRUIu2DFA9NE28Fbqru7Q5dei4Pw")
                .setCallback(this.pickerCallback)
                .build();
                picker.setVisible(true);
            }
        },

        async pickerCallback(data) {
            console.log("PickerCallback", data);
            var url = "nothing";
            var name = "nothing";
            if (data[google.picker.Response.ACTION] === google.picker.Action.PICKED) {
                // Array of Picked Files
                console.log(docs);   
            }
        }
    }
}
</script>