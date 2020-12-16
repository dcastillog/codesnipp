<template>
  <app-layout>
    <snippet-list></snippet-list>

    <create-snippet-modal></create-snippet-modal>
    <settings-modal></settings-modal>
  </app-layout>
</template>


<script>
import SnippetList from "../components/snippets/SnippetList";

import CreateSnippetModal from "../components/modals/CreateSnippetModal";
import SettingsModal from "../components/modals/SettingsModal";

export default {
  components: {
    SnippetList,
    CreateSnippetModal,
    SettingsModal,
  },
};
</script>
    