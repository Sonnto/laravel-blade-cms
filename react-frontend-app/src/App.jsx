import React, { useState, useEffect } from "react";
import Education from "./components/Education";
import Employment from "./components/Employment";
import Project from "./components/Project";
import "./App.css";

function App() {
    const [projects, setProjects] = useState(null);
    const [education, setEducation] = useState(null);
    const [employments, setEmployments] = useState(null);

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
        fetchData("employments", setEmployments);
        fetchData("education", setEducation);
        fetchData("projects", setProjects);
    }, []);

    //Resume section
    //Employment data
    let employmentArray = [];
    if (projects) {
        for (let i = 0; i < employments.length; i++) {
            employmentArray.push(<Employment data={employments[i]} />);
        }
    }

    //Education data
    let educationArray = [];
    if (education) {
        for (let i = 0; i < education.length; i++) {
            educationArray.push(<Education data={education[i]} />);
        }
    }

    //Project data
    let projectArray = [];
    if (projects) {
        for (let i = 0; i < projects.length; i++) {
            projectArray.push(<Project data={projects[i]} />);
        }
    }

    return (
        <>
            <section id="resume" className="resume=container">
                <h2 className="section-heading">Resume</h2>
                <div className="experience-container">
                    <h3 className="experience-type">Employment</h3>
                    {employmentArray}
                </div>
                <div className="experience-container">
                    <h3 className="experience-type">Education</h3>
                    {educationArray}
                </div>
            </section>
            <section id="projects" className="projects-container">
                <h2 className="section-heading">Projects</h2>
                <div className="projects-content-container">{projectArray}</div>
            </section>
        </>
    );
}

export default App;
