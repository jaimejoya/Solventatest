<template>
    <div class="wrapper">
      <div class="login-container">
        <h1>Solventa</h1>
        <p class="subtitle">Inicia sesión en tu cuenta</p>
        
        <form @submit.prevent="handleSubmit">
          <div class="form-group">
            <label>Correo electrónico</label>
            <input 
              type="email" 
              v-model="email"
              placeholder="tu@email.com"
              class="form-control"
            >
          </div>
  
          <div class="form-group">
            <label>Contraseña</label>
            <input 
              type="password" 
              v-model="password"
              placeholder="********"
              class="form-control"
            >
          </div>
  
          <div class="form-actions">
            <div class="form-check">
              <input 
                type="checkbox" 
                id="remember" 
                v-model="remember"
                class="form-check-input"
              >
              <label for="remember" class="form-check-label">Recordarme</label>
            </div>
            <a href="#" class="forgot-link">¿Olvidaste tu contraseña?</a>
          </div>
  
          <button type="submit" class="btn-submit">
            Iniciar sesión
          </button>
        </form>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue'
  
  const email = ref('')
  const password = ref('')
  const remember = ref(false)
  
  const handleSubmit = () => {
    console.log({
      email: email.value,
      password: password.value,
      remember: remember.value
    })
  }
  </script>
  
  <style>
  .wrapper {
    min-height: 100vh;
    width: 100vw;
    background-color: #0f1623;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .login-container {
    background-color: #1a2332;
    border-radius: 8px;
    width: 100%;
    max-width: 450px;
    padding: 32px;
  }
  
  h1 {
    color: white;
    font-size: 28px;
    font-weight: 500;
    text-align: center;
    margin: 0;
    margin-bottom: 8px;
  }
  
  .subtitle {
    color: #6c757d;
    text-align: center;
    font-size: 14px;
    margin-bottom: 32px;
  }
  
  .form-group {
    margin-bottom: 24px;
  }
  
  .form-group label {
    display: block;
    color: white;
    font-size: 14px;
    margin-bottom: 8px;
  }
  
  .form-control {
    width: 100%;
    background-color: #2a3444;
    border: none;
    border-radius: 4px;
    color: white;
    padding: 10px 12px;
    font-size: 14px;
  }
  
  .form-control::placeholder {
    color: #4a5568;
  }
  
  .form-control:focus {
    outline: none;
    box-shadow: 0 0 0 2px rgba(55, 85, 237, 0.2);
  }
  
  .form-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 24px;
  }
  
  .form-check {
    display: flex;
    align-items: center;
    gap: 8px;
  }
  
  .form-check-input {
    width: 16px;
    height: 16px;
    background-color: #2a3444;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    margin: 0;
  }
  
  .form-check-input:checked {
    background-color: #3755ed;
  }
  
  .form-check-label {
    color: white;
    font-size: 14px;
    cursor: pointer;
  }
  
  .forgot-link {
    color: #3755ed;
    text-decoration: none;
    font-size: 14px;
  }
  
  .forgot-link:hover {
    color: #2940b0;
  }
  
  .btn-submit {
    width: 100%;
    background-color: #3755ed;
    color: white;
    border: none;
    border-radius: 4px;
    padding: 10px;
    font-size: 14px;
    cursor: pointer;
    transition: background-color 0.2s;
  }
  
  .btn-submit:hover {
    background-color: #2940b0;
  }
  
  /* Prevenir el autofill amarillo de Chrome */
  input:-webkit-autofill,
  input:-webkit-autofill:hover,
  input:-webkit-autofill:focus {
    -webkit-text-fill-color: white;
    -webkit-box-shadow: 0 0 0px 1000px #2a3444 inset;
    transition: background-color 5000s ease-in-out 0s;
  }
  
  @media (max-width: 500px) {
    .login-container {
      margin: 16px;
      padding: 24px;
    }
  }
  </style>