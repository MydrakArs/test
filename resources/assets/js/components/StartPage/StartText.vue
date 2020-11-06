<template>
    <div class="content">
        <div class="logo"></div>
        <div class="text">
            <h1>MusiсCharts</h1>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid, quia ut dolorem laborum perspiciatis laudantium. 
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis sint, aspernatur accusamus eius provident quidem.
            </p>    
        </div>   
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted')
    }
}
</script>

<style lang="less" scoped>

@WC: #ffffff;
@ActiveColor: #24CBE2;
@ContentColor: #24232D;



.content{
    
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    
    p {
        color: @WC;
        width: 57vh;
        font-size: 24px;
    }
}

.text {
    color: @ContentColor;
    font-size: 36px;
    font-family: 'Roboto', sans-serif;
}

.content {
    flex-grow: 5;
    background-image: url(C:/Users/Y700/Downloads/image/FonStartPage.jpg);
    background-size: cover;
    filter: grayscale(20%);
}



</style>