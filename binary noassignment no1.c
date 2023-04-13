/*	1
	1 0
	1 0 1
	1 0 1 0
	1 0 1 0 1

*/
#include<stdio.h>
main()
{
		int i,j,n,count;
		
		printf("Enter the value for using binary no ");
		scanf("%d",&n);
		
		for(i=1;i<=n;i++)
		{
				for(j=1;j<=i;j++)
				{

					printf("%d",j%2);
									
				}
				printf("\n");
		}	
}
