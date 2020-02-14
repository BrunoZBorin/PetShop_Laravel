<template>
    <div v-bind:class="defineCor">
                <div class="panel-heading">{{titulo}}</div>

                    <div class="panel-body">
                        <slot></slot>
                </div>
            </div>
</template>

<script>
    export default {
       props:['titulo', 'cor'],
       computed:{
           defineCor:function(){
               return "panel" + (this.cor||"panel-primary")
           }
       }
    }
</script>

<style media="screen">
   
    .blue > .panel-heading {
    color: #333333;
    background-color:blue ;
    border-color: #d3e0e9;
}
</style>