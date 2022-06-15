def nthLuckyNumber(n):
    DP = [0] * (n+1)
    DP[0] = 1
    prime_1 = 0
    prime_2 = 0
    prime_3 = 0

    for number in range(1,n+1):
        m2 = DP[prime_1] * 2;
        m3 = DP[prime_2] * 3;
        m5 = DP[prime_3] * 5;

        DP[number] = min(m2,min(m3,m5))

        if DP[number] == m2: prime_1 +=1
        if DP[number] == m3: prime_2 +=1
        if DP[number] == m5: prime_3 +=1

    return DP[number-1]