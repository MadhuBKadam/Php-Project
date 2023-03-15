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
                                 command=lambda: self.on_button_click(0, "F:\Project\Game\snake.py"))
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
        
        # create time label
        self.time_label = tk.Label(self.master, text="Time elapsed: 00:00:00", font=("Helvetica", 12))
        self.time_label.pack(pady=10)
        
        # start timer
        self.update_timer()

    def on_button_click(self, index, filename):
        # increment click count
        self.counts[index] += 1
        
        # open file
        os.system(f"python {filename}")
        
    def update_timer(self):
        # update time label
        elapsed_time = time.time() - self.start_time
        hours, remainder = divmod(elapsed_time, 3600)
        minutes, seconds = divmod(remainder, 60)
        self.time_label.configure(text=f"Time elapsed: {hours:02.0f}:{minutes:02.0f}:{seconds:02.0f}")
        
        # update every second
        self.master.after(1000, self.update_timer)

# create main window
root = tk.Tk()
width = root.winfo_screenwidth()
height = root.winfo_screenheight()
root.geometry("%dx%d+0+0" % (width, height))


click_counter = ClickCounter(root)
root.mainloop()


