<template>
    <!-- <div class="widget-box" v-if="loading == false">
        <p class="widget-box-title">Portugal</p>
        <div class="progress-arc-summary">
            <div class="progress-arc-wrap">
                <div class="progress-arc-info">
                    <p class="progress-arc-title">{{ this.actualTemperatue.actual }} Cº</p>
                </div>
            </div>
        </div>
    </div>
  -->

    <div class="card" v-bind:class="{ 'card-day' : isDay}">
        <div>
              <span style="float: right; padding: 10px; display: flex; font-size: 20px;">
                <h4 class="clock_shadow">{{time.hours}}:</h4>
                <h4 class="clock_shadow">{{time.minutes}}:</h4>
                <h4 class="clock_shadow">{{time.seconds}}</h4>
              </span>
        </div>

        <div class="night">
            <div class="rain" v-if="raining">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="moon" v-if="!isDay">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="sun" v-if="isDay"></div>

            <div class="clouds" v-if="cloudy" >
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>

        </div>



        <div class="info" style="z-index: 1 !important;">
      <span>
        <h2>{{this.actualTemperatue.actual}}C°</h2>
      </span>
            <span>
        <p>Vento: {{this.actualTemperatue.wind}} Km/h</p>
        <p>Humidade: {{this.actualTemperatue.humidity}}%</p>
      </span>
            <span>
      </span>
        </div>
    </div>

</template>

<script>
export default {
    name: "WeatherApp",

    mounted() {

        setInterval(function () {
            this.getTime();
        }.bind(this), 1000)

        this.fetchData();
    },

    data(){
        return{
            time:{
                hours: "",
                minutes: "",
                seconds : "",
            },
            actualTemperatue: {
                actual: "",
                feels: "",
                humidity: "",
                wind: "",
                main: "",
            },
            location: {
                Country: 'Portugal',
            },
            weather:{
                icon: "",
            },
            loading : true,
            raining: false,
            sunny: false,
            clear: false,
            cloudy: false,
            isDay: false,
        }
    },

    methods:{
        getTime(){
            const today = new Date();
            this.time.hours = today.getHours();
            this.time.minutes = today.getUTCMinutes();
            this.time.seconds = today.getSeconds();


            if(this.time.hours > 6 && this.time.hours < 20){
                this.isDay = true;
            }

        },

        fetchData(){
            fetch(`/api/weather?Country=${this.location.Country}`)
                .then(response => response.json())
                .then(data => {
                    this.actualTemperatue.actual = Math.round(data.main.temp);
                    this.actualTemperatue.humidity = Math.round(data.main.humidity);
                    this.actualTemperatue.wind = Math.round(data.wind.speed);
                    this.actualTemperatue.main = data.weather[0].description;
                    this.weather.icon = ("http://openweathermap.org/img/w/" + data.weather[0].icon + ".png");

                    if(this.actualTemperatue.main == "rain" || this.actualTemperatue.main == "shower rain"){
                        this.raining = true;
                        this.cloudy = true;
                    }

                    if(this.actualTemperatue.main == "few clouds" || this.actualTemperatue.main == "overcast clouds" || this.actualTemperatue.main == "scattered clouds" || this.actualTemperatue.main == "broken clouds"){
                        this.cloudy = true;
                    }

                    if(this.actualTemperatue.main == "clear sky" ){
                        this.clear = true;
                    }

                    this.loading = false;
                })
        },
    }
}
</script>

<style scoped>

* {
    box-sizing: border-box;
}

h1,
h2,
h3,
h4,
h5,
h6,
p {
    margin: 0;
    font-weight: 700;
}

.card {
    position: relative;
    aspect-ratio: 1;
    background: #1a2238;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 5px 5px 15px 1px #0005;
}
.card-day {
    position: relative;
    aspect-ratio: 1;
    background: #2196f3c9;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 5px 5px 15px 1px #0005;
}

.card .night {
    position: relative;
}
.card .night .rain {
    position: absolute;
    width: 350px;
    height: 280px;
    z-index: 5;
}
.card .night .rain span {
    position: absolute;
    top: -15px;
    left: 50px;
    width: 12px;
    aspect-ratio: 1;
    border-radius: 80% 0 55% 50%/55% 0 80% 50%;
    background: #7fc1f9;
    transform: rotate(-45deg);
    animation: rain 1s linear;
}
.card .night .rain span:nth-child(odd) {
    background: #395172;
}
.card .night .rain span:nth-child(1) {
    left: 147px;
    width: 1px;
    animation: rain linear infinite;
    animation-duration: 1.1s;
    animation-delay: 0.25s;
}
.card .night .rain span:nth-child(2) {
    left: 283px;
    width: 1px;
    animation: rain linear infinite;
    animation-duration: 0.9333333333s;
    animation-delay: 0.75s;
}
.card .night .rain span:nth-child(3) {
    left: 26px;
    width: -1px;
    animation: rain linear infinite;
    animation-duration: 1.4333333333s;
    animation-delay: 1s;
}
.card .night .rain span:nth-child(4) {
    left: 54px;
    width: 7px;
    animation: rain linear infinite;
    animation-duration: 0.7666666667s;
    animation-delay: 1.5s;
}
.card .night .rain span:nth-child(5) {
    left: 354px;
    width: -1px;
    animation: rain linear infinite;
    animation-duration: 0.7666666667s;
    animation-delay: 1s;
}
.card .night .rain span:nth-child(6) {
    left: 35px;
    width: -2px;
    animation: rain linear infinite;
    animation-duration: 1.4333333333s;
    animation-delay: 0.75s;
}
.card .night .rain span:nth-child(7) {
    left: 281px;
    width: -4px;
    animation: rain linear infinite;
    animation-duration: 1.2666666667s;
    animation-delay: 0.5s;
}
.card .night .rain span:nth-child(8) {
    left: 355px;
    width: 15px;
    animation: rain linear infinite;
    animation-duration: 0.9333333333s;
    animation-delay: 1.5s;
}
.card .night .rain span:nth-child(9) {
    left: 55px;
    width: -2px;
    animation: rain linear infinite;
    animation-duration: 1.1s;
    animation-delay: 1.5s;
}
.card .night .rain span:nth-child(10) {
    left: 360px;
    width: -9px;
    animation: rain linear infinite;
    animation-duration: 1.2666666667s;
    animation-delay: 0.75s;
}
.card .night .rain span:nth-child(11) {
    left: 24px;
    width: -4px;
    animation: rain linear infinite;
    animation-duration: 1.4333333333s;
    animation-delay: 1s;
}
.card .night .rain span:nth-child(12) {
    left: 130px;
    width: 5px;
    animation: rain linear infinite;
    animation-duration: 0.9333333333s;
    animation-delay: 1.25s;
}
.card .night .rain span:nth-child(13) {
    left: 368px;
    width: 8px;
    animation: rain linear infinite;
    animation-duration: 0.9333333333s;
    animation-delay: 0.5s;
}
.card .night .rain span:nth-child(14) {
    left: 363px;
    width: -1px;
    animation: rain linear infinite;
    animation-duration: 1.1s;
    animation-delay: 1.25s;
}
.card .night .rain span:nth-child(15) {
    left: 27px;
    width: -6px;
    animation: rain linear infinite;
    animation-duration: 0.7666666667s;
    animation-delay: 0.5s;
}
.card .night .rain span:nth-child(16) {
    left: 246px;
    width: 8px;
    animation: rain linear infinite;
    animation-duration: 1.1s;
    animation-delay: 1s;
}
.card .night .rain span:nth-child(17) {
    left: 172px;
    width: 11px;
    animation: rain linear infinite;
    animation-duration: 0.9333333333s;
    animation-delay: 0.75s;
}
.card .night .rain span:nth-child(18) {
    left: 329px;
    width: -1px;
    animation: rain linear infinite;
    animation-duration: 1.2666666667s;
    animation-delay: 0.75s;
}
.card .night .rain span:nth-child(19) {
    left: 356px;
    width: -2px;
    animation: rain linear infinite;
    animation-duration: 0.7666666667s;
    animation-delay: 1.25s;
}
.card .night .rain span:nth-child(20) {
    left: 400px;
    width: -8px;
    animation: rain linear infinite;
    animation-duration: 1.1s;
    animation-delay: 1.25s;
}
.card .night .rain span:nth-child(21) {
    left: 109px;
    width: 10px;
    animation: rain linear infinite;
    animation-duration: 1.4333333333s;
    animation-delay: 0.25s;
}
.card .night .rain span:nth-child(22) {
    left: 349px;
    width: 4px;
    animation: rain linear infinite;
    animation-duration: 1.1s;
    animation-delay: 0.75s;
}
.card .night .rain span:nth-child(23) {
    left: 95px;
    width: 13px;
    animation: rain linear infinite;
    animation-duration: 0.9333333333s;
    animation-delay: 0.75s;
}
.card .night .rain span:nth-child(24) {
    left: 105px;
    width: -4px;
    animation: rain linear infinite;
    animation-duration: 0.9333333333s;
    animation-delay: 1.5s;
}
.card .night .rain span:nth-child(25) {
    left: 79px;
    width: 11px;
    animation: rain linear infinite;
    animation-duration: 1.1s;
    animation-delay: 1.5s;
}
.card .night .rain span:nth-child(26) {
    left: 8px;
    width: -7px;
    animation: rain linear infinite;
    animation-duration: 0.9333333333s;
    animation-delay: 0.25s;
}
.card .night .rain span:nth-child(27) {
    left: 24px;
    width: 4px;
    animation: rain linear infinite;
    animation-duration: 1.4333333333s;
    animation-delay: 0.25s;
}
.card .night .rain span:nth-child(28) {
    left: 212px;
    width: -2px;
    animation: rain linear infinite;
    animation-duration: 1.4333333333s;
    animation-delay: 0.75s;
}
.card .night .rain span:nth-child(29) {
    left: 147px;
    width: -2px;
    animation: rain linear infinite;
    animation-duration: 0.7666666667s;
    animation-delay: 0.25s;
}
.card .night .rain span:nth-child(30) {
    left: 360px;
    width: -6px;
    animation: rain linear infinite;
    animation-duration: 1.4333333333s;
    animation-delay: 0.5s;
}
.card .night .rain span:nth-child(31) {
    left: 70px;
    width: -3px;
    animation: rain linear infinite;
    animation-duration: 1.1s;
    animation-delay: 0.5s;
}
.card .night .rain span:nth-child(32) {
    left: 245px;
    width: -7px;
    animation: rain linear infinite;
    animation-duration: 1.2666666667s;
    animation-delay: 0.75s;
}
.card .night .rain span:nth-child(33) {
    left: 224px;
    width: -7px;
    animation: rain linear infinite;
    animation-duration: 0.7666666667s;
    animation-delay: 1s;
}
.card .night .rain span:nth-child(34) {
    left: 194px;
    width: 5px;
    animation: rain linear infinite;
    animation-duration: 0.7666666667s;
    animation-delay: 1s;
}
.card .night .rain span:nth-child(35) {
    left: 229px;
    width: -5px;
    animation: rain linear infinite;
    animation-duration: 0.7666666667s;
    animation-delay: 1s;
}
.card .night .rain span:nth-child(36) {
    left: 3px;
    width: 3px;
    animation: rain linear infinite;
    animation-duration: 1.1s;
    animation-delay: 1.5s;
}
.card .night .rain span:nth-child(37) {
    left: 74px;
    width: 5px;
    animation: rain linear infinite;
    animation-duration: 0.7666666667s;
    animation-delay: 0.75s;
}
.card .night .rain span:nth-child(38) {
    left: 18px;
    width: -5px;
    animation: rain linear infinite;
    animation-duration: 1.1s;
    animation-delay: 0.75s;
}
.card .night .rain span:nth-child(39) {
    left: 153px;
    width: 8px;
    animation: rain linear infinite;
    animation-duration: 0.9333333333s;
    animation-delay: 1s;
}
.card .night .rain span:nth-child(40) {
    left: 65px;
    width: 11px;
    animation: rain linear infinite;
    animation-duration: 0.9333333333s;
    animation-delay: 1.5s;
}
.card .night .moon {
    position: absolute;
    top: 40px;
    left: 50px;
    background: #f6edbd;
    width: 60px;
    aspect-ratio: 1;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: 0 0 10px 2px #f6edbd70;
    animation: moon 1.5s;
}

.card .night .sun {
    position: absolute;
    top: 40px;
    left: 50px;
    background: #ffeb3b;
    width: 60px;
    aspect-ratio: 1;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: 0 0 10px 2px #f6edbd70;
    animation: moon 1.5s;
}

.card .night .moon span {
    position: absolute;
    background: #ece1a8;
    aspect-ratio: 1;
    border-radius: 50%;
}
.card .night .moon span:nth-child(1) {
    width: 10px;
    top: 10px;
    left: 22px;
}
.card .night .moon span:nth-child(2) {
    width: 6px;
    top: 25px;
    left: 25px;
}
.card .night .moon span:nth-child(3) {
    width: 6px;
    top: 35px;
    left: 15px;
}
.card .night .moon span:nth-child(4) {
    width: 12px;
    top: 12px;
    left: 0px;
}
.card .night .moon span:nth-child(5) {
    width: 12px;
    top: 50px;
    left: 10px;
}
.card .night .moon span:nth-child(6) {
    width: 5px;
    top: 17px;
    left: 40px;
}
.card .night .moon span:nth-child(7) {
    width: 8px;
    top: 35px;
    left: 45px;
}
.card .night .moon span:nth-child(8) {
    width: 4px;
    top: 35px;
    left: 35px;
}
.card .night .moon span:nth-child(9) {
    width: 7px;
    top: 45px;
    left: 30px;
}
.card .night .moon span:nth-child(9) {
    width: 7px;
    top: 20px;
    left: 53px;
}
.card .night .moon span:nth-child(10) {
    width: 7px;
    top: 45px;
    left: 33px;
}
.card .night .clouds {
    position: absolute;
    top: 170px;
    width: 100%;
    height: 110px;
}
.card .night .clouds span {
    position: absolute;
    width: 300px;
    aspect-ratio: 1;
    background: #d5d0d0;
    border-radius: 50%;
}
.card .night .clouds span:nth-child(1) {
    top: 30px;
    left: 50px;
    z-index: 1;
}
.card .night .clouds span:nth-child(2) {
    top: 60px;
    left: -100px;
    z-index: 1;
}
.card .night .clouds span:nth-child(3) {
    top: 45px;
    left: 250px;
    z-index: 1;
}
.card .night .clouds span:nth-child(4) {
    background: #d5d0d0;
    top: 10px;
    left: 170px;
}
.card .night .clouds span:nth-child(5) {
    background: #d5d0d0;
    top: 20px;
    left: -50px;
}
.card .info {
    position: absolute;
    padding: 10px;
    bottom: 0;
    width: 100%;
    height: 20%;
    background: #fff;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 5;
}
.card .info span {
    height: 100%;
    display: flex;
    flex-direction: column;
    gap: 5px;
    justify-content: center;
    color: #000a;
}
.card .info span p {
    font-size: 14px;
}
.card .info span:nth-child(1) {
    width: 80px;
    align-items: center;
    font-size: 24px;
}
.card .info span:nth-child(1) h2 {
    font-weight: 600;
}
.card .info span:nth-child(3) {
    align-items: flex-end;
}

@keyframes rain {
    0% {
        transform: translate(0%, 0%) rotate(-30deg) scale(1, 1);
    }
    80% {
        transform: translate(-75px, 290px) rotate(-30deg) scale(1, 1);
    }
    100% {
        transform: translate(-80px, 300px) rotate(-30deg) scale(2, 3);
    }
}
@keyframes moon {
    0% {
        transform: translateY(300px);
    }
    100% {
        transform: translateY(0px);
    }
}

.clock_shadow{
    color: white;
    text-shadow: 0px 3px 0px #b2a98f, 0px 14px 10px rgb(0 0 0 / 15%);
}

</style>
