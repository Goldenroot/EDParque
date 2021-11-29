<template>

    <div class="widget-box" v-if="loading == false">
        <p class="widget-box-title">Portugal</p>
        <div class="progress-arc-summary">
            <div class="progress-arc-wrap">
                <div class="progress-arc-info">
                    <p class="progress-arc-title">{{ this.actualTemperatue.actual }} Cº</p>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "WeatherApp",

    mounted() {
        this.fetchData();
    },
    data(){
        return{
            actualTemperatue: {
                actual: "",
                feels: "",
                humidity: "",
                wind: "",
            },
            location: {
                Country: 'Portugal',
            },
            weather:{
                icon: "",
            },
            Date:{
                day: "",
            },
            loading : true,
        }
    },
    methods:{
        fetchData(){
            fetch(`/api/weather?Country=${this.location.Country}`)
                .then(response => response.json())
                .then(data => {
                    this.actualTemperatue.actual = Math.round(data.main.temp);
                    this.actualTemperatue.humidity = Math.round(data.main.humidity);
                    this.actualTemperatue.wind = Math.round(data.wind.speed);
                    this.weather.icon = ("http://openweathermap.org/img/w/" + data.weather[0].icon + ".png");
                    this.loading = false;
                })
        },
    }
}
</script>

<style scoped>

</style>
