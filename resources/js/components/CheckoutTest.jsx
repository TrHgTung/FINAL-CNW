import React, { useState, useEffect } from "react"
import { Container } from "react-bootstrap"

function Countrystatecity() {
    const [country, setCountry] = useState([]);

    useEffect(() => {
        const getcountry = async () => {
            const rescountry = await fetch("https://provinces.open-api.vn/api/");
        }
        getcountry();
    }, []);
    return (

    )
}
