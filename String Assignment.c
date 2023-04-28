#include<stdio.h>
#include<string.h>
#include<windows.h>
int main()
{
		int choice,i,position,c = 0;;
		char str1[1000],str2[1000],str3[1000],length;
		int flag=0;
		
	do
	{
		printf("Main Menu");
		printf("\n\t 1.Equality \n\t 2.String Copy \n\t 3.Concat \n\t 4.Show \n\t 5.Reverse \n\t 6.Palindrome \n\t 7.Sub String \n\t 8.Exit");
		printf("\nEnter Your Choice ");
		scanf("%d",&choice);
		
	
		switch(choice)
		{
			case 1:
		
				printf("Enter Your String ");
				scanf("%s",&str1);
				printf("Enter Your String 2 ");
				scanf("%s",&str2);	
				printf("\n The String After Equality is: ");
				{
					if(strcmp(str1,str2)==0)
					{
						printf("The String is Equal\n");
					}	
					else
					{
						printf("The String Is Not Equal\n");
					}
				}
			break;
			case 2:
				printf("Enter Your String 1 :-");
				scanf("%s",&str1);
				printf("Enter Your String 2 :-");
				scanf("%s",&str2);
				printf("\n The String After String Copy Is:- ");
				{
						printf("%s ",strcpy(str3,str1));
						printf("%s \n",strcpy(str3,str2));
				}
			break;
			
			case 3:
				printf("Enter Your String 1 :-");
				scanf("%s",&str1);
				printf("Enter Your String 2 :-");
				scanf("%s",&str2);
				printf("\n The String After Concat Is :- ");
				{
					printf("%s \n ",strcat(str1,str2));
				
				}
			break;
			case 4:
				printf("\n The String After Show Is");
				{
				printf("Enter Your String  :-");
				scanf("%s",&str1);
				
				printf("%s",str1);
				}
				
			break;
			case 5:
				
				printf("Enter Your String 1 :-");
				scanf("%s",&str1);
				printf("\n The String After Reverse Is %s \n",strrev(str1));
				
				
			break;	
			case 6:
				printf("\n You Are The selct For Palindrome or not\n");
				{
					printf("Enter a string:");
    				scanf("%s", str1);
    
  					length = strlen(str1);
  					
					for(i=0;i < length ;i++)
					{        			
						if(str1[i] != str1[length-i-1])
						{
            				flag = 1;
          					  break;
           				}
        			}
    
  				    if (flag)
				    {
        					printf("\n%s is not a palindrome\n", str1);
    				}    
    				else
					{
              	    		 printf("\n%s is a palindrome\n", str1);
   					}
   						 
				}
			break;
			case 7:
				printf("\n The String After Sub String Is");
				{
					    char sub[1000];
 						
 
						   printf("Input a string\n");
   						   scanf("%s",&str1);
 
   						printf("Enter the position and length of substring\n");
  						scanf("%d%d", &position, &length);
 
  						while (c < length)
						{
      						sub[c] = str1[position+c-1];
     						c++;
   						}
   							sub[c] = '\0';
 
  							 printf("Required substring is \"%s\"\n", sub); // '\"' to print "
 
   							return 0;
						}
			
			break;
			case 8:
				if(choice==8)
				{
					printf("\n Thank You");
					exit(0);
				}
			break;
			default :
				{
					printf("Invalid Input \n");
				}
		}
	}
		while(choice!=8);
		{
			printf("Invalid Input");
		}		
}

