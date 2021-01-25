<template>
  <b-navbar toggleable="lg" type="dark" variant="info">
    <b-navbar-brand href="#">
      <icon-base width="35">
        <icon-dots-horizontal></icon-dots-horizontal>
      </icon-base>
    </b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav>
        <b-nav-item :to="{ name: 'discover' }">All snippets</b-nav-item>
      </b-navbar-nav>
      <!-- Right aligned nav items -->
      <b-navbar-nav class="ml-auto">
        <b-nav-item-dropdown text="Lang" right>
          <b-dropdown-item href="#">EN</b-dropdown-item>
          <b-dropdown-item href="#">ES</b-dropdown-item>
          <b-dropdown-item href="#">RU</b-dropdown-item>
          <b-dropdown-item href="#">FA</b-dropdown-item>
        </b-nav-item-dropdown>

        <b-nav-item-dropdown right>
          <!-- Using 'button-content' slot -->
          <template #button-content>
            <em
              ><icon-base> <icon-user></icon-user></icon-base
            ></em>
          </template>
          <b-dropdown-item href="#">Profile</b-dropdown-item>
          <b-dropdown-item href="#">Sign Out</b-dropdown-item>
        </b-nav-item-dropdown>

        <toggle-button></toggle-button>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
</template>

<script>
import ToggleButton from "../components/buttons/ToggleButton";
import IconButton from "../components/buttons/IconButton";
import IconBase from "../components/icons/IconBase";
import IconDotsHorizontal from "../components/icons/IconDotsHorizontal";
import IconUser from "../components/icons/IconUser";

export default {
  components: {
    ToggleButton,
    IconButton,
    IconBase,
    IconUser,
    IconDotsHorizontal,
  },
};
</script>


        



