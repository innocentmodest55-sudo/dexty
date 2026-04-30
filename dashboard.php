<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOLA | Dashboard Advanced</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        /* 4D/Advanced Effects for Advance Card */
        .bg-purple-advanced {
            background: linear-gradient(145deg, #4c1d95, #1e1b4b);
            border-top: 1px solid rgba(255,255,255,0.4);
            box-shadow: 0 15px 35px rgba(76, 29, 149, 0.4), inset 0 0 15px rgba(255,255,255,0.1);
            position: relative;
            overflow: visible !important;
        }

        /* Modern Range Slider Styling */
        .advance-slider {
            -webkit-appearance: none;
            width: 100%;
            height: 8px;
            background: rgba(255,255,255,0.2);
            border-radius: 5px;
            outline: none;
            margin: 25px 0;
        }

        .advance-slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            width: 24px;
            height: 24px;
            background: #fff;
            border: 3px solid #22c55e;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0 0 15px rgba(34, 197, 94, 0.6);
            transition: 0.3s;
        }

        .advance-slider::-webkit-slider-thumb:hover {
            transform: scale(1.2);
            box-shadow: 0 0 25px rgba(34, 197, 94, 0.9);
        }

        /* Floating Amount Label */
        .amount-display {
            font-size: 1.8rem;
            font-weight: 900;
            color: #fff;
            text-shadow: 0 0 10px rgba(255,255,255,0.5);
            display: block;
            margin-top: 5px;
        }

        .badge-limit {
            font-size: 0.7rem;
            background: rgba(255,255,255,0.1);
            padding: 3px 8px;
            border-radius: 5px;
        }

        /* 3D Graph Bars Mini */
        .mini-graph {
            display: flex;
            align-items: flex-end;
            gap: 3px;
            height: 20px;
            position: absolute;
            top: 20px;
            right: 20px;
        }
        .mini-graph .bar {
            width: 4px;
            background: #22c55e;
            border-radius: 1px;
            box-shadow: 0 0 5px #22c55e;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <div class="text-center mb-4">
        <h3 class="fw-bold text-white">YOLA<span style="color: #22c55e;">.</span></h3>
    </div>
    <nav class="nav flex-column">
        <a class="nav-link active" href="#"><i class="fas fa-th-large me-2"></i> Dashboard</a>
        <a class="nav-link" href="#"><i class="fas fa-wallet me-2"></i> Mikopo Yangu</a>
        <a class="nav-link" href="#"><i class="fas fa-history me-2"></i> Historia</a>
        <a class="nav-link" href="#"><i class="fas fa-cog me-2"></i> Mipangilio</a>
        <a class="nav-link mt-5 text-danger" href="#"><i class="fas fa-sign-out-alt me-2"></i> Ondoka</a>
    </nav>
</div>

<div class="content">
    <div class="top-nav">
        <h5 class="fw-bold m-0 text-secondary">Overview <small class="text-muted" style="font-size: 12px;">| Advanced Mode</small></h5>
        <div class="d-flex align-items-center gap-3">
            <span>Karibu, <strong>Kidd</strong></span>
            <div style="width: 45px; height: 45px; background: #22c55e; color: white; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 1.2rem; box-shadow: 0 4px 10px rgba(34, 197, 94, 0.3);">KI</div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-3">
            <div class="stat-card bg-blue">
                <h6>Jumla ya Mkopo</h6>
                <h2 class="fw-bold">0 TZS</h2>
                <i class="fas fa-hand-holding-dollar opacity-50 float-end"></i>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-card bg-green">
                <h6>Riba ya Mkopo</h6>
                <h2 class="fw-bold">0 TZS</h2>
                <i class="fas fa-chart-line opacity-50 float-end"></i>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-card bg-red">
                <h6>Pending Loans</h6>
                <h2 class="fw-bold">0</h2>
                <i class="fas fa-clock opacity-50 float-end"></i>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="stat-card bg-purple-advanced">
                <div class="mini-graph">
                    <div class="bar" style="height: 40%"></div>
                    <div class="bar" style="height: 70%"></div>
                    <div class="bar" style="height: 50%"></div>
                </div>
                <h6>Quick Advance</h6>
                <span class="amount-display" id="valDisp">10,000</span>
                <span class="text-white-50" style="font-size: 11px;">TSH AVAILABLE</span>
                
                <input type="range" min="10000" max="100000" step="5000" value="10000" class="advance-slider" id="advanceRange">
                
                <div class="d-flex justify-content-between text-white-50" style="font-size: 10px;">
                    <span>MIN: 10K</span>
                    <span>MAX: 100K</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-7">
            <div class="loan-section h-100 shadow-sm">
                <h4 class="fw-bold mb-4 text-success"><i class="fas fa-plus-circle me-2"></i> Omba Mkopo Mpya</h4>
                <form action="process_loan.php" method="POST">
                    <div class="mb-3">
                        <label class="fw-bold">Kiasi cha Mkopo (TZS)</label>
                        <input type="number" name="amount" class="form-control" placeholder="100,000" required>
                    </div>
                    <div class="mb-3">
                        <label class="fw-bold">Muda wa Kurejesha</label>
                        <select name="duration" class="form-select">
                            <option value="1">Mwezi 1 (Riba 10%)</option>
                            <option value="2">Miezi 2</option>
                        </select>
                    </div>
                    <button type="submit" class="btn-yola w-100">Tuma Maombi ya Mkopo</button>
                </form>
            </div>
        </div>

        <div class="col-md-5">
            <div class="loan-section h-100" style="border-left: 5px solid #4c1d95; background: #fff;">
                <h4 class="fw-bold mb-4" style="color: #4c1d95;"><i class="fas fa-bolt me-2"></i> Confirm Advance</h4>
                <form action="process_advance.php" method="POST">
                    <p class="text-secondary">Kiasi ulichochagua kwenye kadi:</p>
                    <div class="p-3 mb-3 text-center border rounded bg-light">
                        <h3 class="fw-bold text-dark" id="formVal">10,000 TZS</h3>
                        <input type="hidden" name="advance_amount" id="hiddenAdvance" value="10000">
                    </div>
                    <button type="submit" class="btn btn-dark w-100 py-3 fw-bold" style="border-radius: 10px;">OMBA ADVANCE SASA</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // JS ya kurekebisha namba zinazoonekana kwenye kadi na fomu
    const range = document.getElementById('advanceRange');
    const display = document.getElementById('valDisp');
    const formDisplay = document.getElementById('formVal');
    const hiddenInp = document.getElementById('hiddenAdvance');

    range.addEventListener('input', function() {
        // Format namba iwe na koma (Mfano: 10,000)
        let formatted = Number(this.value).toLocaleString();
        display.innerText = formatted;
        formDisplay.innerText = formatted + " TZS";
        hiddenInp.value = this.value;
    });
</script>

<script src="https://cdn