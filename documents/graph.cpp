#include<iostream>
#include<queue>
#include<stack>
using namespace std;

class graph{
	int V;
	int **adjlist;
public:
	graph(int V)
	{
		this->V=V;
		adjlist=new int *[V];
		for(int i=0;i<V;i++)
		{
			adjlist[i]=new int[V]();
		}
	}

	void addnode(int u,int v,bool dir=true)
	{
		adjlist[u][v]=1;
		if(dir)
		{
			adjlist[v][u]=1;
		}
	}

	void bsf(int s)
	{
		bool *visited=new bool[V]();
		visited[s]=true;
		queue<int> q;
		q.push(s);
		cout<<s<<" ";
		while(!q.empty())
		{
			int curr=q.front();
			q.pop();
			for(int i=0;i<V;i++)
			{
				if(adjlist[curr][i]==1 && !visited[i])
				{
					cout<<i<<"  ";
					visited[i]=true;
					q.push(i);
				}
			}
		}

	}
	void dfshelper(int s,bool* visited)
	{
		visited[s]=true;
		cout<<s<<" ";
		for(int i=0;i<V;i++)
		{
			if(adjlist[s][i]==1 && !visited[i])
			{
				dfshelper(i,visited);
			}
		}
	}

	void dfs(int s)
	{
		bool *visited=new bool[V]();
		dfshelper(s,visited);
	}

	void pathheper(int a,int b,bool* visited,int* path,int pathindex)
	{
		visited[a]=true;
		path[pathindex++]=a;
		if(a==b)
		{
			for(int i=0;i<pathindex;i++)
			{
				cout<<path[i]<<" ";
			}
			cout<<endl;
		}
		for(int i=0;i<V;i++)
		{
			if(adjlist[a][i]==1 && !visited[i])
			{
				pathheper(i,b,visited,path,pathindex);
			}
		}
		visited[a]=false;
		pathindex--;
	}

	void paths(int s,int d)
	{
		bool* visited=new bool[V]();
		int *path=new int[V];
		int pathindex=0;
		pathheper(s,d,visited,path,pathindex);
	}

};

int main()
{
	int v=4;
	//cin>>v;
	graph g(v);

	g.addnode(0,1);
	g.addnode(3,0);
	g.addnode(1,2);
	g.addnode(2,1);
	g.addnode(2,3);

	g.dfs(1);
	cout<<endl;
	g.paths(0,2);
	
}







/*
#include<bits/stdc++.h>
using namespace std;

class Edge{
    public:
        int source;
        int destination;
        int weight;
};

bool compare(Edge e1,Edge e2){
    return e1.weight < e2.weight;
}

int findparent(int v,int parent[]){
    if(v==parent[v])
        return v;
    return findparent(parent[v],parent);
}

void kruskals(Edge input[],int n){
    sort(input,input+n,compare);
    Edge* output = new Edge[n-1];
    int *parent = new int[n];
    for (int i = 0; i < n; i++)
        parent[i] = i;
    int i = 0, count = 0;
    while (count != n-1) {
        Edge curr = input[i];
        int sourceparent = findparent(curr.source,parent);
        int destparent = findparent(curr.destination,parent);
        if(sourceparent != destparent){
            output[count++] = curr;
            parent[sourceparent] = destparent;
        }
        i++;
    }
    
    for (int i = 0; i < count; i++)
        cout<<output[i].source<<" "<<output[i].destination<<" "<<output[i].weight<<endl;
}

int main() {
    int V,E;
    cin>>V>>E;
    Edge* input = new Edge[V];
    for (int i = 0; i < E; i++)
        cin>>input[i].source>>input[i].destination>>input[i].weight;
    kruskals(input,V);
}
*/