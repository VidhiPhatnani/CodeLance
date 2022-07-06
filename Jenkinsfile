// Declarative //
pipeline {
    agent any

    environment {
		DOCKERHUB_CREDENTIALS=credentials('dockerhub_jenkins')
	}
    stages {
        stage('Docker Build and Tag') {
            steps {
                echo 'Building..'
                sh 'docker build -t firstimage:latest .' 
                sh 'docker tag nginxtest vidhip/firstimage:latest'
                sh 'docker tag nginxtest vidhip/firstimage:$BUILD_NUMBER'
            }
        }
        stage('Login') {

			steps {
				sh 'echo $DOCKERHUB_CREDENTIALS_PSW | docker login -u $DOCKERHUB_CREDENTIALS_USR --password-stdin'
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
    post {
		always {
			sh 'docker logout'
		}
	}
}
