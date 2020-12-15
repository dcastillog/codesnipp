<template>
  <div class="p-2">
    <h5 class="sidebar-content__title">NOTES</h5>
    <div>
      <div class="sidebar-content-section__item">
        <div>Local</div>
        <div>Icono</div>
      </div>
      <div class="sidebar-content-section__item">
        <div>Gists</div>
        <div>Icono</div>
      </div>
    </div>
    <h5 class="sidebar-content__title">LANGUAGES</h5>
    <div>
      <div class="sidebar-content-section__item">
        <div>All</div>
        <div class="p-0 text-right">
          <div class="tag-count">12</div>
        </div>
      </div>
      <div class="sidebar-content-section__item">
        <div>Json</div>
        <div class="p-0 text-right">
          <div class="tag-count">2</div>
        </div>
      </div>
    </div>
  </div>
</template>

<style lang="scss">
.sidebar-content__title {
  font-size: 1rem;
  color: gray;
  font-weight: 500;
}
.sidebar-content-section__item {
  display: flex;
  justify-content: space-between;
  font-size: 0.9rem;
  padding: 10px;

  &:hover {
    background-color: #cacaca;
    transition: 0.2s ease-in-out;
  }
  &* {
    padding-top: 10px;
  }
  cursor: pointer;
}
.tag-count {
  background: #202020;
  color: #fff;
  font-weight: 400;
  padding: 2px;
  width: 30px;
  text-align: center;
  border-radius: 20%;
}
</style>

<script>
import SidebarContentSection from "./SidebarContentSection";

export default {
  components: {
    SidebarContentSection,
  },
};
</script>