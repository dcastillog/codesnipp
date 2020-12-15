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
      <div class="snippet-card__content">
        <strong>scripts.js <span>(Javascript)</span></strong>
        <div>
          <textarea name="" id="" cols="30" rows="1"></textarea>
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
  background: #cacaca;
}
</style>

<script>
import IconButton from "../buttons/IconButton";
import IconGithub from "../icons/IconGithub";
import IconPencil from "../icons/IconPencil";
import IconTrash from "../icons/IconTrash";

export default {
  components: {
    IconButton,
    IconGithub,
    IconPencil,
    IconTrash,
  },
};
</script>