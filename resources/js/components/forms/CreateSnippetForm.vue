<template>
  <b-form>
    <form-group inline>
      <template #form-label>Name</template>
      <template #form-input
        ><b-form-input
          id="name"
          type="text"
          v-model="snippet.name"
          required
          placeholder="Enter snippet name"
        ></b-form-input
      ></template>
    </form-group>
    <form-group inline>
      <template #form-label>Description</template>
      <template #form-input
        ><b-form-input
          id="description"
          type="text"
          v-model="snippet.description"
          required
          placeholder="Enter description"
        ></b-form-input
      ></template>
    </form-group>
    <form-group inline>
      <template #form-label>Tags</template>
      <template #form-input>
        <b-form-tags
          id="tags"
          v-model="snippet.tags"
          placeholder="Enter tags"
        ></b-form-tags>
      </template>
    </form-group>

    <!-- <form-group inline>
      <template #form-label>Visibility</template>
      <template #form-input>
        <b-form-select v-model="snippet.public">
          <b-form-select-option :value="null"
            >Please select an option</b-form-select-option
          >
          <b-form-select-option :value="false">Secret</b-form-select-option>
          <b-form-select-option :value="true">Public</b-form-select-option>
        </b-form-select>
      </template>
    </form-group> -->

    <div class="file-section" v-for="(file, index) in files" :key="index">
      <div class="row">
        <div class="col">
          <form-group inline>
            <template #form-label>Filename</template>
            <template #form-input
              ><b-form-input
                id="filename"
                v-model="file.name"
                type="text"
                required
                placeholder="Enter file name"
              ></b-form-input
            ></template>
          </form-group>

          <form-group inline>
            <template #form-label>Config</template>
            <template #form-input>
              <b-row>
                <b-col sm="12" lg="6" class="pt-3"
                  ><v-select
                    label="name"
                    :options="themeOptions"
                    placeholder="Select a theme"
                    v-model="file.theme"
                  ></v-select
                ></b-col>
                <b-col sm="12" lg="6" class="pt-3"
                  ><v-select
                    label="name"
                    :options="languageOptions"
                    placeholder="Select a language"
                    v-model="file.language"
                  ></v-select
                ></b-col>
              </b-row>
            </template>
          </form-group>

          <form-group inline>
            <template #form-label>Snippet</template>
            <template #form-input>
              <editor
                v-model="file.content"
                :theme="file.theme"
                :mode="file.language"
              ></editor>
            </template>
          </form-group>
          <div class="text-center">
            <b-button @click="addFile" v-show="files.length - 1 == index"
              >Add a file</b-button
            >
          </div>
        </div>
        <div class="col-1">
          <icon-button v-show="files.length > 1" @click="deleteFile(index)">
            <icon-trash></icon-trash>
          </icon-button>
        </div>
      </div>
    </div>
  </b-form>
</template>


<script>
import IconButton from "../buttons/IconButton";
import IconTrash from "../icons/IconTrash";
import FormGroup from "./FormGroup";
import Editor from "../editor/Editor";
import vSelect from "vue-select";
import "vue-select/dist/vue-select.css";

export default {
  components: {
    IconButton,
    IconTrash,
    FormGroup,
    Editor,
    vSelect,
  },
  data() {
    return {
      snippet: {
        name: "",
        description: "",
        files: {},
        public: false,
        // updatedAt: null,
        // createdAt: null
        tags: [],
      },
      files: [
        {
          name: "",
          theme: "",
          language: "",
          content: "",
        },
      ],

      themeOptions: ["Ambiance", "Dracula"],

      languageOptions: ["Plain text", "Java", "Javascript"],
    };
  },

  methods: {
    addFile: function () {
      this.files.push({
        name: "",
        theme: "",
        language: "",
        content: "",
      });
    },
    deleteFile: function (index) {
      this.files.splice(index, 1);
    },
    updateCode: function (updatedCode) {
      console.log(updatedCode);
    },
  },
};
</script>


<style>
.file-section {
  background: #f6f6f6;
  padding: 10px 20px 10px 10px;
}
</style>

