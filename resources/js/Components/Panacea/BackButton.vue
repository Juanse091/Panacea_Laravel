<template>
    <div class="btn_back back"> 
        <h2>Volver</h2> 
        <i class="bi bi-chevron-left back_icon"></i>
    </div>
</template>

<script>
  export default {
    name: 'BackButton',
    props: {}
  }
</script>

<style scoped>
    .back{
    display: flex;
    justify-content: left;
    align-items: center;
    flex-direction: row-reverse;
    margin-left: 8%;
    margin-top: 2%;
}

.btn_back > h2{
    font-size: 35px;
    font-family: 'Montserrat';
    font-weight: 400;
    color: black;
}

.back_icon{
    font-size: 35px;
    color: black;
    padding-top: 2.2px;
}

@media (max-width: 500px) {
    .back{
        display: flex;
        justify-content: left;
        align-items: center;
        flex-direction: row-reverse;
        margin-left: 4%;
        margin-top: 10%;
    }

    .btn_back > h2{
        font-size: 20px;
        font-family: 'Montserrat';
        font-weight: 400;
        color: black;
    }
    
    .back_icon{
        font-size: 15px;
        color: black;
        padding-top: 2.2px;
    }
}
</style>