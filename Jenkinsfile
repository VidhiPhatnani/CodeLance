// Declarative //
pipeline {
    agent any

    stages {
        stage('Docker Build and Tag') {
            steps {
                echo 'Building..'
                sh 'docker build -t firstimage:latest .' 
                sh 'docker tag nginxtest vidhip/firstimage:latest'
                sh 'docker tag nginxtest vidhip/firstimage:$BUILD_NUMBER'
            }
        }
        stage('Publish image to Docker Hub') {
          
            steps {
        withDockerRegistry([ credentialsId: "dockerhub_jenkins", url: "" ]) {
          sh  'docker push vidhip/firstimage:latest'
          sh  'docker push vidhip/firstimage:$BUILD_NUMBER' 
        }
                  
          }
        }
        stage('Run Docker container on Jenkins Agent') {
             
            steps {
                sh "docker run -d -p 8081:80 vidhip/firstimage"
 
            }
        }
        stage('Run Docker container on remote hosts') {
             
            steps {
                sh "docker -H ssh://jenkins@192.168.0.137 run -d -p 8081:80 vidhip/firstimage"
            }
        }
    }
}
// Script //
node {
    stage('Build') {
        echo 'Building....'
    }
    stage('Test') {
        echo 'Building....'
    }
    stage('Deploy') {
        echo 'Deploying....'
    }
}
