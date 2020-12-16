<template>
  <div>
    <app-header />

    <div class="container-fluid">
      <b-row class="justify-content-center">
        <b-col cols="3" class="pt-3 d-none d-lg-block">
          <sidebar></sidebar>
        </b-col>

        <div class="pt-3 d-block d-lg-none">
          <b-sidebar id="sidebar">
            <sidebar></sidebar>
          </b-sidebar>
        </div>
        <b-col>
          <div class="container">
            <div class="d-lg-flex">
              <search-box class="d-lg-block d-none"></search-box>
              <div class="d-flex justify-content-between">
                <div class="m-2 d-lg-none">
                  <icon-button v-b-toggle.sidebar>
                    <icon-menu></icon-menu>
                  </icon-button>
                </div>
                <div class="d-flex">
                  <div class="m-2">
                    <icon-button
                      width="35"
                      @click="$bvModal.show('settings-modal')"
                    >
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
            </div>
            <slot>
              <transition name="fade">
                <router-view></router-view>
              </transition>
            </slot>
          </div>
        </b-col>
      </b-row>
    </div>
    <app-footer />
  </div>
</template>


<script>
import AppHeader from "./AppHeader";
import AppFooter from "./AppFooter";
import Sidebar from "../components/sidebar/Sidebar";
import SearchBox from "../components/SearchBox";
import IconButton from "../components/buttons/IconButton";

import IconPlus from "../components/icons/IconPlus";
import IconCog from "../components/icons/IconCog";
import IconMenu from "../components/icons/IconMenu";

export default {
  name: "app-layout",
  components: {
    Sidebar,
    SearchBox,
    IconButton,
    IconPlus,
    IconCog,
    IconMenu,
    AppHeader,
    AppFooter,
  },
};
</script>