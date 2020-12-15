<template>
  <div class="editor">
    <textarea ref="editor" v-model="code"><p ></p></textarea>
  </div>
</template>

<script>
import CodeMirror from "codemirror/lib/codemirror.js";
import "codemirror/lib/codemirror.css";
// modes
import "codemirror/mode/xml/xml";
// themes
import "codemirror/theme/dracula.css";

import "codemirror/addon/edit/closetag";
import "codemirror/addon/display/autorefresh";

export default {
  mounted: function () {
    var editor = CodeMirror.fromTextArea(this.$refs["editor"], {
      mode: this.mode,
      theme: this.theme,
      lineNumbers: this.lineNumbers,
      tabSize: this.tabSize,
      readOnly: this.readOnly,
      autoCloseTags: this.autoCloseTags,
      autoRefresh: true,
    });
  },

  data() {
    return {
      code: "",
    };
  },

  props: {
    mode: {
      type: String,
      default: "xml",
    },
    theme: {
      type: String,
      default: "dracula",
    },
    lineNumbers: {
      type: Boolean,
      default: true,
    },
    autoCloseTags: {
      type: Boolean,
      default: true,
    },
    tabSize: {
      type: Number,
      default: 4,
    },
    readOnly: {
      type: Boolean,
      default: false,
    },
  },
};
</script>

<style>
.CodeMirror-code {
  font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
}
</style>