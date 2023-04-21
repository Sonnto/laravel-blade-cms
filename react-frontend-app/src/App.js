import React, { useState, useEffect } from "react";
import Project from "./components/Project";
import "./App.css";

function App() {
    const [projects, setProjects] = useState(null);
    // const [education, setEducation] = useState(null);
    // const [employments, setEmployments] = useState(null);

    useEffect(() => {
        const fetchData = async (api, setter) => {
            try {
                const url = `http://localhost:8888/api/${api}`;
                const res = await fetch(url);
                const json = await res.json();
                setter(json);
                console.log(json);
            } catch (error) {
                console.log(error);
            }
        };
        fetchData("projects", setProjects);
        // fetchData("education", setEmployments);
        // fetchData("employments", setEmployments);
    }, []);

    return <div>{projects && <Project data={projects[0]} />}</div>;
}

export default App;
