import { useEffect, useState } from "react";
import User from "./User";

function APICall1(){
    const APIURL = "https://jsonplaceholder.typicode.com/users";

    const [usersData, setUsersData] = useState([]);

    // use effect for load users at start of componnet

    useEffect(()=>{
        fetch(APIURL).then((response)=>{
            //console.log(response);
            response.json().then((result)=>{
                //console.log(result);
                setUsersData(result);
            })
        });
    }, []); // component did mount

    return <>
        <h1>Users Data From API</h1>
        <div className="row">
            {
                usersData.map((user, key)=> <User userdata={user} key={key}></User>)
            }
        </div>
    </>
}

export default APICall1;