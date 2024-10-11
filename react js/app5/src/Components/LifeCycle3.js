import React from "react";
class LifeCycle3 extends React.Component{
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

    componentDidMount(){
        console.log("Component Did Mount Method Called");
    }
}

export default LifeCycle3;