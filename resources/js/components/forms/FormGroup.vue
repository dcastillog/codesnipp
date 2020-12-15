<template>
  <b-row align-v="center" class="pt-3">
    <b-col cols="2">
      <label for="name">
        <slot name="form-label"></slot>
      </label>
    </b-col>

    <b-col>
      <slot name="form-input"></slot>
    </b-col>
  </b-row>
</template>
