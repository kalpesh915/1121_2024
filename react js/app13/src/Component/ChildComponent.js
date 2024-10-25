import { useEffect, useRef } from "react";

function ChildComponent(Props){
    const lastval = useRef();

    useEffect(()=>{
        lastval.current = Props.data;
    });

    const previousProp = lastval.current;
    console.log(previousProp);
    return <>
        <h1>Child Component Counter is {Props.data} </h1>
    </>
}

export default ChildComponent;