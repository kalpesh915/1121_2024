import { useState, useEffect } from "react";

function WeatherInfo(){
    let [icon, setIcon] = useState("10d");
    let [cityname, setCityName] = useState("Rajkot");
    let [coords, setCoords] = useState({});
    let [weather, setWeather] = useState([]);
    let [main, setMain] = useState({});
    let [wind, setWind] = useState({});
    let [sys, setSys] = useState({});
    let [weatherInfo, setWeatherInfo] = useState({});
    let today = new Date();

    const APIURL = `https://api.openweathermap.org/data/2.5/weather?q=${cityname}&appid=5a5932a5ccb1805699367b71ff5ca345&units=metric`;

    useEffect(()=>{
        loadWeatherData();
    }, []);

    function convertTime(time){
        let date = new Date(time * 1000);
        //console.log(date.toLocaleTimeString());
        return date.toLocaleTimeString();
    }

    function loadWeatherData(){
        fetch(APIURL).then((response)=>{
            response.json().then((result)=>{
                //console.log(result);
                if(result.cod === 200){
                    setCoords(result.coords);
                    setWeather(result.weather[0]);
                    setMain(result.main);
                    setWind(result.wind);
                    setSys(result.sys);
                    setWeatherInfo(result);
                    setIcon(result.weather[0].icon);
                    console.log(weatherInfo.dt * 1000)
                    today = new Date(weatherInfo.dt);
                }else{
                    alert("Unknown city");
                }
            });
        });
    }

    return <>
        <div className="container-fluid">
            <h1 className="bg-primary text-center p-4 text-white">Weather Info</h1>

            <div className="my-3 input-group">
                <input type="search" className="form-control p-3" placeholder="Enter City Name for Search Weather Information" value={cityname} onChange={(e)=>setCityName(e.target.value)}/>
                <input type="button" className="btn btn-primary" value="Search Now" onClick={loadWeatherData}></input>
            </div>

            <div className="card w-75 mx-auto">
                <div className="card-header">
                    <div className="row">
                        <div className="col-md-6">
                            <img src={`https://openweathermap.org/img/wn/${icon}@4x.png`} className="w-50 d-block mx-auto"/>                            
                            <p className="text-center lead">{weather.main} {weather.description}</p>
                            <hr />
                        </div>
                        <div className="col-md-6">
                            <h1 className="text-center">{weatherInfo.name}<sup> ( {sys.country} )</sup></h1>
                            <div className="row p-5 text-center">
                                <div className="col-md-6">
                                    <i className="mx-2 wi wi-sunrise icon"></i>
                                    <p>{convertTime(sys.sunrise)}</p>
                                </div>
                                <div className="col-md-6">
                                    <i className="mx-2 wi wi-sunset icon"></i>
                                    <p>{convertTime(sys.sunset)}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="card-body">
                    <div className="row text-center">
                        <div className="col-md-3">
                            {main.temp}<i className="mx-2 wi wi-celsius icon"></i>
                        </div>
                        <div className="col-md-3">
                            {main.temp_max}<i className="mx-2 wi wi-thermometer icon"></i>
                        </div>
                        <div className="col-md-3">
                            {main.temp_min}<i className="mx-2 wi wi-thermometer-exterior icon"></i>
                        </div>
                        <div className="col-md-3">
                            {main.humidity}<i className="mx-2 wi wi-humidity icon"></i>
                        </div>
                    </div>
                </div>
                <div className="card-footer">

                </div>
            </div>
        </div>
    </>
}

export default WeatherInfo;