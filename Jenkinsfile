pipeline
{
    
	agent any
/*	triggers {
  pollSCM '* * * * *'
}*/
    stages
	{
	    stage('Checkout APP files'){
	        steps
	        {
	            git credentialsId: 'c92375ea-bc2a-4233-93ad-0635764ee21c', url: 'https://vinothdevops@bitbucket.org/vinothdevops/simple-php-web-app.git'
	            echo 'checkout completed'
	            
	           }
      
	        }
	    
	    
            
	   /*  stage ('approval required'){
	         steps {
	        emailext (
	        attachLog: true,
            to: 'shvinothkumar@enoahisolution.com',
            subject: "STARTED: Job '${env.JOB_NAME} [${env.BUILD_NUMBER}]'" ,
             body: """please go to console output of ${BUILD_URL}input to approve or Reject.""",
              recipientProviders: [[$class: 'DevelopersRecipientProvider']]
                     )
                     
           script {
                   try {
                         
                            env.APPROVE_PROD = input message: 'Deploy to Production', ok: 'proceed'
                               // parameters: [choice(name: 'APPROVE_PROD', choices: 'YES\nNO', description: 'Deploy from STAGING to PRODUCTION?')]
                            } catch (Exception err) {
                              currentBuild.result = 'ABORTED';
                              throw e
                            }
                        }
                        
                        }*/
/*post
    { 
		aborted
        {
			emailext (
				attachLog: true, 
                body: '''$PROJECT_NAME - Build # $BUILD_NUMBER - $BUILD_STATUS: Check console output at $BUILD_URL to view the results.''',          
                compressLog: true, 
                subject: '$PROJECT_NAME - Build # $BUILD_NUMBER - $BUILD_STATUS', 
                to: "shvinothkumar@enoahisolution.com",
                from: 'shvinothkumar@enoahisolution.com'
            )
        }
		 }
	     }
				
        
	      
	     
	 
    	stage("Need approval for IT team to deploy to prod"){
        steps {
	        emailext (
	        to: 'shvinothkumar@enoahisolution.com',
            subject: "Approval Required STARTED: Job '${env.JOB_NAME} [${env.BUILD_NUMBER}]'" ,
             body: """Hi IT Team,
             need your approval to deploy in production server
             please go to console output of ${BUILD_URL}input to approve or Reject.""",
             recipientProviders: [[$class: 'DevelopersRecipientProvider']]
                     )
                     
           script {
                   try {
                         
                            env.APPROVE_PROD = input message: 'Deploy to Production', ok: 'proceed'
                               // parameters: [choice(name: 'APPROVE_PROD', choices: 'YES\nNO', description: 'Deploy from STAGING to PRODUCTION?')]
                            } catch (Exception err) {
                              currentBuild.result = 'ABORTED';
                              throw e
                            }
                        }
                        
                        }
        }*/

		 stage ('deploy to prod'){
			steps
			{ 
			 sshagent(['14115821-f08d-4b98-9a9b-4b5c0a62c782'])  {
		
        sh  '''
        
        rsync -av --update /var/lib/jenkins/workspace/TestPHP_Project/* enoah@10.0.9.152:/var/www/html'''

        }
        
    }
		 
    
   /* post
    { 
		always
        {
	         	emailext (
				attachLog: true, 
                body: '''$PROJECT_NAME - Build # $BUILD_NUMBER - $BUILD_STATUS: Check console output at $BUILD_URL to view the results.''',          
                compressLog: true, 
                subject: '$PROJECT_NAME - Build # $BUILD_NUMBER - $BUILD_STATUS', 
                to: "shvinothkumar@enoahisolution.com",
                from: 'shvinothkumar@enoahisolution.com'
            )
            
        }
		 }
		 
	}*/

}
}
}
	

	

	
