import file_cleaner

def main():
  
    infile = open('input.txt', 'r')
    outfile = open("search_url.txt","w")

    for line in infile:
        line = line.strip()
        print(line)
        outfile.write("https://www.amazon.com/s?k=" + line)
        
    outfile.close()
    infile.close()
main()