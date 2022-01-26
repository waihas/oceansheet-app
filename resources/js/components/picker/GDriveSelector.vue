<template>
  <div class="">
    <div class="file-selector flex-col bg-gray-100">
      <figure>
        <UploadIcon/>
      </figure>Select Files from Google Drive
      <p>
        <span>Authenticate with Google Drive</span>
      </p>
      <button type="button" @click="driveIconClicked();">Connect to Google Drive</button>
    </div>

    <div class="mt-6 inline-flex text-sm text-gray-700 items-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="fill-current h-6 w-6 mr-4" viewBox="0 0 24 24">
        <path d="M15.762 8.047l-4.381 4.475-2.215-2.123-1.236 1.239 3.451 3.362 5.619-5.715-1.238-1.238zm-3.762-5.503c2.5 1.805 4.555 2.292 7 2.416v9.575c0 3.042-1.686 3.827-7 7.107-5.309-3.278-7-4.065-7-7.107v-9.575c2.447-.124 4.5-.611 7-2.416zm0-2.544c-3.371 2.866-5.484 3-9 3v11.535c0 4.603 3.203 5.804 9 9.465 5.797-3.661 9-4.862 9-9.465v-11.535c-3.516 0-5.629-.134-9-3z"/>
      </svg>
      <div>
        OceanSheet does not store any copies of your file content.<br>
        Read our privacy policy 
        <router-link :to="{name: 'privacy.policy'}">
          here.
        </router-link>
      </div>
    </div>

    
    <AttachmentList :tempAttachments="getTempAttachments"/>
  </div>
</template>

<script>
import AttachmentList from "./AttachmentList";
import UploadIcon from "./UploadIcon";

// this one should be a modal and i put it here cause i may call it from connections and also from workflows

export default {
  name: "Attachment",
  data() {
    return {
      tempAttachments: [],
      attachments: [],
      pickerApiLoaded: false,
      developerKey: "AIzaSyDnUBzVRUIu2DFA9NE28Fbqru7Q5dei4Pw",
      clientId: "727914357338-l3hhcebf48cfesv4r2733vpjia40l8ft.apps.googleusercontent.com",
      scope: "https://www.googleapis.com/auth/drive",
      // scope: "https://www.googleapis.com/auth/drive.readonly",
      // scope: "https://www.googleapis.com/auth/drive.compose",
      // scope: "https://www.googleapis.com/auth/drive.modify",
      oauthToken: null
    };
  },
  components: {
    AttachmentList: AttachmentList,
    UploadIcon
  },
  mounted() {
    let gDrive = document.createElement("script");
    gDrive.setAttribute("type", "text/javascript");
    // gDrive.setAttribute("prompt", "select_account");
    gDrive.setAttribute("src", "https://apis.google.com/js/api.js");
    document.head.appendChild(gDrive);
  },
  methods: {
    // function called on click of drive icon
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
      console.log("Handle Auth result");
      if (authResult && !authResult.error) {
        this.oauthToken = authResult.access_token;
        this.createPicker();
      }
    },
    // Create and render a Picker object for picking user Photos.
    createPicker() {
      console.log("Create Picker");
      if (this.pickerApiLoaded && this.oauthToken) {
        var picker = new google.picker.PickerBuilder()
          .enableFeature(google.picker.Feature.MULTISELECT_ENABLED)
          .addView(google.picker.ViewId.DOCS)
          .setOAuthToken(this.oauthToken)
          .setDeveloperKey("AIzaSyDnUBzVRUIu2DFA9NE28Fbqru7Q5dei4Pw")
          .setCallback(this.pickerCallback)
          .build();
        picker.setVisible(true);

        // const pickerBuilder = new google.picker.PickerBuilder().
        //  setOAuthToken(this.oauthToken).
        //  setDeveloperKey(this.config.developerKey).
        //  setCallback(this.pickerCallback)         
        //   this.$emit('build', pickerBuilder)
    
        //   if (!this.$listeners.build)
        //     pickerBuilder.addView(google.picker.ViewId.DOCS)
            
        //   const picker = pickerBuilder.build()
        //   picker.setVisible(true)
      }
    },
    async pickerCallback(data) {
      console.log("PickerCallback Files : ", data);
      var url = "nothing";
      var name = "nothing";
      if (data[google.picker.Response.ACTION] === google.picker.Action.PICKED) {
        var doc = data[google.picker.Response.DOCUMENTS][0];
        url = doc[google.picker.Document.URL];
        name = doc.name;
        let docs = data.docs;
        var param = { fileId: doc.id, oAuthToken: this.oauthToken, name: name };
        console.log('param: ' + param);
        let attachments = [];
        for (let i = 0; i < docs.length; i++) {
          let attachment = {};
          attachment._id = docs[i].id;
          attachment.title = docs[i].name;
          attachment.name = docs[i].name + "." + docs[i].mimeType.split("/")[1];
          attachment.type = "gDrive";
          attachment.description = "Shared with GDrive";
          attachment.extension =
            "." +
            docs[i].mimeType.substring(docs[i].mimeType.lastIndexOf(".") + 1);
          attachment.iconURL = docs[i].iconUrl;
          attachment.size = docs[i].sizeBytes;
          attachment.user = JSON.parse(localStorage.getItem("user"));
          attachment.thumb = null;
          attachment.thumb_list = null;
          attachments.push(attachment);
        }
        this.tempAttachments = [...attachments];
      }
      this.oauthToken = null;
      this.pickerApiLoaded = false;
    }
  },
  computed: {
    getTempAttachments() {
      return this.tempAttachments;
    },
    getAttachments() {
      return this.attachments;
    }
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.file-selector {
  padding: 55px;
  font-weight: 600;
  background-color: #f9f9f9;
  border: 1px solid #ccc;
  border-radius: 4px;
  color: #4e5b69;
  z-index: -9;
}
figure {
  margin: 0px;
}
.dropzone-container {
  display: flex;
  flex-direction: column;
  border: 1px dashed #ccc;
  border-radius: 15px;
}
h1,
h2 {
  font-weight: normal;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
button {
  background: #031629;
  box-shadow: 0 0 2px 0 rgba(3, 22, 41, 0.11),
    0 6px 16px 0 rgba(3, 22, 41, 0.08);
  font-family: SFProDisplay-Regular;
  font-size: 14px;
  color: #ffffff;
  letter-spacing: 0.4px;
  padding: 12px 30px;
  border-radius: 4px;
  outline: none;
  cursor: pointer;
  transition: all 0.25s;
}
button:hover {
  background-color: rgba(65, 184, 131, 1);
  border-color: transparent;
}
.separator {
  position: relative;
}
.separator:after {
  position: absolute;
  content: "";
  height: 1px;
  width: 200px;
  background: #d8d8d8;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
span {
  position: relative;
  background: #f9f9f9;
  padding: 0 4px;
  z-index: 9;
  font-size: 12px;
  color: #4e5b69;
}
</style>