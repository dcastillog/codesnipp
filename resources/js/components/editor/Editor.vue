<template>
  <div class="editor">
    <textarea ref="editor"></textarea>
  </div>
</template>

<script>
import CodeMirror from "codemirror/lib/codemirror.js";
import "codemirror/lib/codemirror.css";
// modes
import "codemirror/mode/xml/xml";
import "codemirror/mode/javascript/javascript";
import "codemirror/mode/cobol/cobol";
import "codemirror/mode/coffeescript/coffeescript";
import "codemirror/mode/css/css";
import "codemirror/mode/dart/dart";
import "codemirror/mode/django/django";
import "codemirror/mode/dockerfile/dockerfile";
import "codemirror/mode/erlang/erlang";
import "codemirror/mode/go/go";
import "codemirror/mode/markdown/markdown";
import "codemirror/mode/pascal/pascal";
import "codemirror/mode/perl/perl";
import "codemirror/mode/php/php";
import "codemirror/mode/pug/pug";
import "codemirror/mode/python/python";
import "codemirror/mode/r/r";
import "codemirror/mode/ruby/ruby";
import "codemirror/mode/rust/rust";
import "codemirror/mode/sass/sass";
import "codemirror/mode/clike/clike";
// themes
import "codemirror/theme/dracula.css";
import "codemirror/theme/3024-day.css";
import "codemirror/theme/3024-night.css";
import "codemirror/theme/ambiance.css";
import "codemirror/theme/ayu-mirage.css";
import "codemirror/theme/base16-dark.css";
import "codemirror/theme/base16-light.css";
import "codemirror/theme/bespin.css";
import "codemirror/theme/cobalt.css";
import "codemirror/theme/darcula.css";
import "codemirror/theme/duotone-dark.css";
import "codemirror/theme/duotone-light.css";

import "codemirror/addon/edit/closetag";
import "codemirror/addon/display/autorefresh";

export default {
  mounted: function () {
    this.editor = CodeMirror.fromTextArea(this.$refs["editor"], {
      mode: this.mode.toLowerCase(),
      theme: this.theme.toLowerCase(),
      lineNumbers: this.lineNumbers,
      lineWrapping: true,
      tabSize: this.tabSize,
      readOnly: this.readOnly,
      autoCloseTags: this.autoCloseTags,
      autoRefresh: true,
    });

    if (this.readOnly) {
      this.editor.setValue(this.fileContent);
    } else {
      this.editor.on("keyup", () => {
        this.$emit("input", this.content);
        this.content = this.editor.getValue();
      });
    }

    this.editor.save();
  },

  watch: {
    mode: function (newValue) {
      if (
        newValue.toLowerCase() === "java" ||
        newValue.toLowerCase() === "c" ||
        newValue.toLowerCase() === "cpp" ||
        newValue.toLowerCase() === "cs" ||
        newValue.toLowerCase() === "kotlin"
      ) {
        this.editor.setOption("mode", "clike");
      } else {
        this.editor.setOption("mode", newValue.toLowerCase());
      }
    },

    theme: function (newValue, oldValue) {
      this.editor.setOption("theme", newValue.toLowerCase());
    },
  },
  data() {
    return {
      content: "",
      editor: null,
    };
  },

  props: {
    fileContent: {
      type: String,
    },
    mode: {
      type: String,
      default: "javascript",
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
  methods: {
    updateValue(value) {
      console.log(value);
      this.$emit("input", value);
    },
  },
};
</script>

<style>
.editor {
  height: 100%;
}

.CodeMirror-code {
  font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
}
.CodeMirror {
  border-radius: 10px;
  box-shadow: 0 0 0 1px #444444;
  border: 5px solid transparent;
  height: 100%;
  /* width: calc(initial - 1000px); */
}
</style>