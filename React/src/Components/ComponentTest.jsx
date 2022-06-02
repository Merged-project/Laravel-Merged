import React from 'react'
//import React, ESTO---->{useEffect}<---- from 'react'  ==>  no hace falta esto porque utilizamos el -->React<--.useEffect

const ComponentTest = () => {

    const [artist, setArtist] = React.useState([]);

    React.useEffect(() => {
        document.title = 'React Project';
        getData();
    }, []) // los [] impiden que se ejecute mas de una vez

    const getData = async () => {
        const data = await fetch('http://127.0.0.1:8000/api/artist')
        const artists = await data.json()
        setArtist(artists)
        // console.log(artists)
    }

    return (
        <div>
            <h1>Artists</h1>
            <ul>
                {
                artist.map(item =>(
                    <li key="item.id">{item.name} - {item.img}</li>
                    ))
                }
            </ul>
        </div>
    );
}

export default ComponentTest
