import { useRef } from "react";

function RefDemo3(){
    let inputref = useRef();
    return <>
        <h1>Ref Demo in Function Component</h1>
        <input type="text" ref={inputref}/>
        <button onClick={()=>{
            inputref.current.style.color = "red";
            inputref.current.style.backgroundColor = "yellow"
        }}>Update</button>
    </>
}

export default RefDemo3;