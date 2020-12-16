<template>
  <b-card class="m-4">
    <div class="snippet-card__header">
      <h5>Card title</h5>

      <div class="snippet-card__header-buttons">
        <icon-button>
          <icon-github></icon-github>
        </icon-button>
        <icon-button>
          <icon-pencil></icon-pencil>
        </icon-button>
        <icon-button>
          <icon-trash></icon-trash>
        </icon-button>
      </div>
    </div>
    <b-card-text>
      Descripcion
      <div class="snippet-card__content">
        <div class="row">
          <div class="col-sm-8 col-md-9 col-lg-10">
            <strong>scripts<span>(text)</span></strong>
          </div>
          <div class="col text-center">
            <icon-button @click="makeToast()">
              <icon-clipboard></icon-clipboard>
            </icon-button>
            <icon-button>
              <icon-photograph></icon-photograph>
            </icon-button>
          </div>
        </div>
        <editor readOnly></editor>
        <div class="snippet-card__tags row">
          <span class="tag"># Web development</span>
          <span class="tag"># Web Mobile</span>
          <span class="tag"># Web Mobile</span>
          <span class="tag"># Web Mobile</span>
          <span class="tag"># Web Mobile</span>
          <span class="tag"># IA</span>
          <span class="tag"># IA</span>
          <span class="tag"># IA</span>
          <span class="tag"># IA</span>
          <span class="tag"># IA</span>
          <span class="tag"># IA</span>
        </div>
      </div>
    </b-card-text>
  </b-card>
</template>

<style lang="scss">
.snippet-card__header {
  display: flex;
  justify-content: space-between;
}
.snippet-card__content {
  background: #eeecec;
}
.snippet-card__tags {
  padding: 1.5rem;
}
.tag {
  padding: 0.5rem;
  margin: 5px;
  background: #cacaca;
  color: gray;
  border-radius: 8px;
  box-shadow: 5px 5px 5px #aaaaaa;
  cursor: pointer;

  &:hover {
    background: lighten($color: gray, $amount: 5);
    color: #cacaca;
    transition: all 0.2s ease;
  }
}
</style>

<script>
import IconButton from "../buttons/IconButton";
import IconGithub from "../icons/IconGithub";
import IconPencil from "../icons/IconPencil";
import IconTrash from "../icons/IconTrash";
import IconPhotograph from "../icons/IconPhotograph";
import IconClipboard from "../icons/IconClipboard";
import Editor from "../editor/Editor";

export default {
  components: {
    Editor,
    IconButton,
    IconGithub,
    IconPencil,
    IconTrash,
    IconPhotograph,
    IconClipboard,
  },
  data() {
    return {
      toastCount: 0,
    };
  },
  methods: {
    makeToast(append = false) {
      this.toastCount++;
      this.$bvToast.toast("-", {
        title: "Copied clipboard",
        autoHideDelay: 100,
        toaster: "b-toaster-bottom-left",
      });
    },
  },
};
</script>

