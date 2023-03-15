import tkinter as tk
import time
import os
import subprocess



class ClickCounter:
    def __init__(self, master):
        self.master = master
        self.master.title("Click Counter")
        self.counts = [0, 0, 0, 0]
        self.start_time = time.time()
        self.create_widgets()

    

    def create_widgets(self):
        # create buttons grid
        button_frame = tk.Frame(self.master)
        button_frame.pack(pady=10)
        
        
        # Snake button
        snake_button = tk.Button(button_frame, text="Snake", width=10, height=2,
                                 font=("Helvetica", 14, "bold"),
                                 command=lambda:subprocess.Popen(args=['python', r'F:\Project\Game\snake.py']))
        snake_button.grid(row=0, column=0, padx=5, pady=5)
        
        # Brick button
        brick_button = tk.Button(button_frame, text="Brick", width=10, height=2,
                                 font=("Helvetica", 14, "bold"),
                                 command=lambda:subprocess.Popen(args=['python', r'F:\Project\Game\brick.py']))
        brick_button.grid(row=0, column=1, padx=5, pady=5)
        
        # Tic Tac Toe button
        tic_button = tk.Button(button_frame, text="Tic Tac Toe", width=10, height=2,
                               font=("Helvetica", 14, "bold"),
                               command=lambda:subprocess.Popen(args=['python', r'F:\Project\Game\tic.py']))
        tic_button.grid(row=1, column=0, padx=5, pady=5)
        
        # Number button
        number_button = tk.Button(button_frame, text="Number", width=10, height=2,
                                  font=("Helvetica", 14, "bold"),
                                  command=lambda:subprocess.Popen(args=['python', r'F:\Project\Game\number.py']))
        number_button.grid(row=1, column=1, padx=5, pady=5)
        
        # create label to display counts
        self.count_label = tk.Label(self.master, text="Counts: [0, 0, 0, 0]", font=("Helvetica", 12))
        self.count_label.pack(pady=10)

        # create label to display time
        self.time_label = tk.Label(self.master, text="Time: 0", font=("Helvetica", 12))
        self.time_label.pack(pady=10)
        self.update_time()

    def update_time(self):
        elapsed_time = round(time.time() - self.start_time)
        self.time_label.config(text=f"Time: {elapsed_time}")
        self.master.after(1000, self.update_time)

    def on_button_click(self, index):
        self.counts[index] += 1
        self.count_label.config(text=f"Counts: {self.counts}")
    

if __name__ == "__main__":
    root = tk.Tk()
    app = ClickCounter(root)
    root.mainloop()
