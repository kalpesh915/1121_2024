import React, { createRef } from "react";

class RefDemo1 extends React.Component{
    constructor(){
        super();
        this.inputRef = createRef();
    }

    render(){
        return <>
            <h1>Example of Ref in Class Component</h1>
            <input type="text" ref={this.inputRef} defaultValue="Demo User"/>
            <button onClick={()=>{
                this.inputRef.current.style.color = "red";
                this.inputRef.current.style.backgroundColor = "yellow";
            }}>Update Input</button>
        </>
    }

    componentDidMount(){
        console.log(this.inputRef.current.value);
    }
}

export default RefDemo1;