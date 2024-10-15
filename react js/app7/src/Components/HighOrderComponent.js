import { useState } from "react"

export function HighOrderComponent(Props){
    console.log(Props);
    return <>
        <div style={{backgroundColor:"red", color:"yellow", padding:"20px", width:"250px", float:"left", margin:"10px"}}>
            <Props.demo></Props.demo>
        </div>
    </>
}

export function Counter(){
    let [count, setCount] = useState(0);
    return <>
        <h1>Count is {count}</h1>
        <button onClick={()=>setCount(Math.ceil(Math.random()* 100))}>Update</button>
    </>
}