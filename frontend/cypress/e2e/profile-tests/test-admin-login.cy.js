describe('Login as Sys Admin', () => {
    it('logs in', () => {
        cy.visit('/')
        cy.get('#login-email') // Logs in
          .type('admin@admin.com').should('have.value', 'admin@admin.com')
        cy.get('#login-password')
          .type('xpAdmin').should('have.value', 'xpAdmin')
        cy.get('#login-form').submit() // Submit form
        cy.url().should('contain', '/home') // Should land on /home
    })
})
