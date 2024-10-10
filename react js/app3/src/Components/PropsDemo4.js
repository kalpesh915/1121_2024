function PropsDemo4(Props){
    return <>
        <p>Props With Function Component</p>
        <h1>Welcome {Props.user.fname} {Props.user.lname}</h1>
    </>
}

export default PropsDemo4;