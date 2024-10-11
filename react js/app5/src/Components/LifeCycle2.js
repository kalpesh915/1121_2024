import React from "react";
class LifeCycle2 extends React.Component{
    constructor(){
        super();
        console.log("Constructor Method Called");
    }

    render(){
        console.log("Rendor Method Called");
        return <>
            Life Cycle Example in React JS
        </>
    }
}

export default LifeCycle2;