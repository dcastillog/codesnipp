<template>
  <app-layout>
    <div class="container-fluid">
      <b-row>
        <b-col cols="3" class="pt-3"> <sidebar></sidebar></b-col>
        <b-col cols="9">
          <div class="container">
            <div class="d-flex">
              <search-box></search-box>
              <div class="d-flex">
                <div class="m-2">
                  <icon-button width="35">
                    <icon-cog></icon-cog>
                  </icon-button>
                </div>

                <div class="m-2">
                  <icon-button
                    width="35"
                    @click="$bvModal.show('create-snippet-modal')"
                  >
                    <icon-plus></icon-plus>
                  </icon-button>
                </div>
              </div>
            </div>
            <snippet-list></snippet-list>
          </div>
        </b-col>
      </b-row>
    </div>

    <create-snippet-modal></create-snippet-modal>
  </app-layout>
</template>


<script>
import SearchBox from "../components/SearchBox";
import Sidebar from "../components/sidebar/Sidebar";
import SnippetList from "../components/snippets/SnippetList";
import IconBase from "../components/icons/IconBase";
import IconMenuOutline from "../components/icons/IconMenuOutline";
import IconPlus from "../components/icons/IconPlus";
import IconCog from "../components/icons/IconCog";
import IconButton from "../components/buttons/IconButton";
import CreateSnippetModal from "../components/modals/CreateSnippetModal";

export default {
  components: {
    SearchBox,
    Sidebar,
    SnippetList,
    IconBase,
    IconMenuOutline,
    IconPlus,
    IconCog,
    IconButton,
    CreateSnippetModal,
  },
  methods: {
    showModal() {
      this.$root.$emit("bv::show::modal", "create-snippet-modal", "#btnShow");
    },
  },
};
</script>
    