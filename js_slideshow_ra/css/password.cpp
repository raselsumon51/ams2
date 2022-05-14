#include<bits/stdc++.h>
#include <iostream>
#include <string>
using namespace std;

int main()
{       
    int t,count=0,p=0,j=0,k=0,l=0,m=0,n=0;

    string s;
    cin >> t;
    while (t--)
    {
        cin >> s;
        for(int i=0;i<s.size();i++)
        {
            if(islower(s[i]) && p==0)
            {
                count++;
                p=1;
              //  cout<<s[i]<<endl;
            }
           if(isupper(s[i]) && i!=0 && i!=(s.size()-1) && j==0)
            {
               // cout<<s[i]<<endl;
                count++;    
                j=1;
            }
            if(isdigit(s[i]) && i!=0 && i!=(s.size()-1) && k==0)
            {
                // cout<<s[i]<<endl;
                count++;
                k=1;
            }
            if( (s[i]=='@' || s[i]=='#' || s[i] =='%' || s[i]=='&' || s[i]=='?') && i!=0 && i!=(s.size()-1) && l==0)
            {
                //cout<<s[i]<<endl;
                count++;
                l=1;
            }
            if(s.size()>=10 && m==0){
               // cout<<s[i]<<endl;
                count++;
                m=1;
            }
        }
    
    if(count>=5)
        cout << "YES" << endl;
    else
        cout << "NO" << endl;
        count=0,p=0,j=0,k=0,l=0,m=0,n=0;
    
        }
    }
    

