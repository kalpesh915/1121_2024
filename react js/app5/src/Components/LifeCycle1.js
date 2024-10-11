import React from "react";
class LifeCycle1 extends React.Component{
    constructor(){
        super();
        console.log("Constructor Method Called");
    }

    render(){
        return <>
            Life Cycle Example in React JS
        </>
    }
}

export default LifeCycle1;