import { forwardRef } from "react";

function RefDemo4(Props, ref){
    return <>
        <h1>Ref Demo in Function Component</h1>
        <input type="text" ref={ref}/>
    </>
}

export default forwardRef(RefDemo4);