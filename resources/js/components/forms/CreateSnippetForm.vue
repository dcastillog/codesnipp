<template>
  <b-form>
    <form-group>
      <template #form-label>Name</template>
      <template #form-input
        ><b-form-input
          id="name"
          type="text"
          required
          placeholder="Enter snippet name"
        ></b-form-input
      ></template>
    </form-group>
    <form-group>
      <template #form-label>Description</template>
      <template #form-input
        ><b-form-input
          id="description"
          type="text"
          required
          placeholder="Enter description"
        ></b-form-input
      ></template>
    </form-group>
    <form-group>
      <template #form-label>Tags</template>
      <template #form-input>
        <b-form-tags id="tags" placeholder="Enter tags"></b-form-tags>
      </template>
    </form-group>

    <div class="file-section">
      <form-group>
        <template #form-label>Filename</template>
        <template #form-input
          ><b-form-input
            id="filename"
            type="text"
            required
            placeholder="Enter file name"
          ></b-form-input
        ></template>
      </form-group>
      <form-group>
        <template #form-label>Language</template>
        <template #form-input>
          <v-select :options="[{ label: 'Python', code: 'py' }]"></v-select>
        </template>
      </form-group>
      <form-group>
        <template #form-label>Snippet</template>
        <template #form-input>
          <editor></editor>
        </template>
      </form-group>
    </div>
  </b-form>
</template>


<script>
import FormGroup from "./FormGroup";
import Editor from "../editor/Editor";
import vSelect from "vue-select";
import "vue-select/dist/vue-select.css";

export default {
  components: {
    FormGroup,
    Editor,
    vSelect,
  },
};
</script>


<style>
.file-section {
  background: #f6f6f6;
  padding: 10px 20px 10px 10px;
}
</style>

