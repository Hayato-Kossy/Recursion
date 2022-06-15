def zeckendorf(m):
    fibonacci_to_m = make_fibo(m) 
    n = len(fibonacci_to_m) 
    
    DP = [0] * (m+1)
    DP[1] = 1
    DP[2] = 1

    fibo_cnt = 3
    for i in range(3,m+1):
        if i in fibonacci_to_m:
            fibo_cnt += 1
        DP[i] = 1 + DP[i - fibonacci_to_m[fibo_cnt]]
    
    return DP[-1]

def make_fibo(m):
    result = [0,1]
    new_fibo = 0

    i = 2
    while new_fibo < m:
        new_fibo = result[i-1] + result[i-2]
        result.append(new_fibo)
        i += 1
    
    return result[:-1]