// Declarative //
pipeline {
    agent any

    
    stages {
        stage('Docker Build and Tag') {
            steps {
                echo 'Building..'
            }
        }
        stage('Publish image to Docker Hub') {
          
            steps {
             echo 'Publishing ...'
        }
                  
          }
        }
        stage('Run Docker container on Jenkins Agent') {
             
            steps {
               echo 'Running..'
 
            }
        }
        stage('Run Docker container on remote hosts') {
             
            steps {
                echo 'Running on remote server'
            }
        }
     }
}
//Script//
node {
    checkout scm

    docker.withRegistry('https://registry.hub.docker.com', 'dockerhub_jenkins') {

        def customImage = docker.build("vidhip/firstimage")

        /* Push the container to the custom Registry */
        customImage.push()
    }
}
