<template>
  <b-container>
    <div class="d-flex justify-content-center h-100">
      <div class="searchbox">
        <input
          class="search__input"
          type="text"
          name=""
          placeholder="Search..."
        />
        <icon-base class="search__icon"
          ><icon-search-outline></icon-search-outline
        ></icon-base>
      </div>
    </div>
  </b-container>
</template>

<style lang="scss">
.searchbox {
  margin-bottom: auto;
  margin-top: auto;
  height: 50px;
  background-color: #353b48;
  border-radius: 30px;
  padding: 10px;

  .search__input {
    color: white;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    caret-color: transparent;
    line-height: 30px;
    transition: width 0.4s linear;
  }

  .search__icon {
    height: 30px;
    width: 30px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color: white;
    text-decoration: none;
  }

  &:hover > .search__input {
    padding: 0 10px;
    width: 650px;
    caret-color: red;
    transition: width 0.4s linear;
  }

  &:hover > .search__icon {
    background: #fff;
    color: #e74c3c;
  }
}
</style>

<script>
import IconBase from "../components/icons/IconBase";
import IconSearchOutline from "../components/icons/IconSearchOutline";
export default {
  name: "search-box",
  components: {
    IconBase,
    IconSearchOutline,
  },
};
</script>