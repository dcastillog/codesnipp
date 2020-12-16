<template>
  <app-layout>
    <div>Gists</div>

    <create-snippet-modal></create-snippet-modal>
    <settings-modal></settings-modal>
  </app-layout>
</template>

<script>
import CreateSnippetModal from "../components/modals/CreateSnippetModal";
import SettingsModal from "../components/modals/SettingsModal";
export default {
  components: {
    CreateSnippetModal,
    SettingsModal,
  },
};
</script>