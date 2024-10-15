import React, { createRef } from "react";

class RefDemo2 extends React.Component{
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
            }}>Update Color</button>
            <button onClick={()=>{
                this.inputRef.current.style.backgroundColor = "yellow";
            }}>
                Update Background Color
            </button>
        </>
    }

    componentDidMount(){
        console.log(this.inputRef.current.value);
    }
}

export default RefDemo2;